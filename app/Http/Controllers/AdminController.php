<?php

namespace App\Http\Controllers;

require_once app_path('helpers/mini_cart_helper.php');

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //

    public function index(Request $request){

        $products = Product::all();
        $carts = Cart::all()->count();

        if (!auth()->check()) {
            $cart = $request->session()->get('cart', []);
            $cart_count = count($cart);
            $cart = collect($cart); // convert the array to a collection
        } else {
            $cart = Cart::all();
            $cart_count = $cart->count(); // use the collection count() method
        }

        /*select last two products*/
        $mini_cart_products = collect($cart->slice(-2));

        $mini_cart_products = $mini_cart_products->map(function ($item) {
            if (is_array($item)) {
                $item = (object) $item;
            }

            if (is_object($item) && isset($item->product_name)) {
                return $item;
            }

            return null;
        })->filter();

        $mini_cart_products = $mini_cart_products->values();

        //dd($cart_header_product);

        //dd($carts);

        //dd($cart_count);

        return view('frontend.index', ([
            'products' => $products,
            'cart' => $cart,
            'cart_count' => $cart_count,
            'mini_cart_products' => $mini_cart_products,
        ]));
    }

    public function shop(Request $request){


        $products = Product::all();
        $carts = Cart::all()->count();

        if (!auth()->check()) {
            $cart = $request->session()->get('cart', []);
            $cart_count = count($cart);
            $cart = collect($cart); // convert the array to a collection
        } else {
            $cart = Cart::all();
            $cart_count = $cart->count(); // use the collection count() method
        }

        /*select last two products*/
        $mini_cart_products = collect($cart->slice(-2));

        $mini_cart_products = $mini_cart_products->map(function ($item) {
            if (is_array($item)) {
                $item = (object) $item;
            }

            if (is_object($item) && isset($item->product_name)) {
                return $item;
            }

            return null;
        })->filter();

        $mini_cart_products = $mini_cart_products->values();

        //dd($cart_header_product);

        //dd($carts);

        //dd($cart_count);

        return view('frontend.shop', ([
            'products' => $products,
            'cart' => $cart,
            'cart_count' => $cart_count,
            'mini_cart_products' => $mini_cart_products,
        ]));
    }

    public function cart(){

        return view('frontend.cart');
    }


    public function updateCart(Request $request)
    {
        $cart_items = $request->input('cart');

        $validatedData = $request->validate([
            'cart.*.qty' => 'required|integer|min:0',
        ]);

        foreach ($cart_items as $id => $item) {
            Cart::where('id', $id)->update(['quantity' => $item['qty']]);
        }

        return redirect()->back()->with('success', 'Cart Updated Successfully');
    }

    public function checkout(Request $request)
    {

       $total = ($request->new_form_total);

        $miniCartData = getMiniCartProducts();

        $carts = Cart::select(DB::raw('MAX(id) as id'), 'product_name', 'product_price', 'product_image', DB::raw('SUM(quantity) as total_quantity'))
            ->where('user_id', auth()->user()->id)
            ->groupBy('product_name', 'product_price', 'product_image')
            ->get();

        $cart_count = $carts->count(); // use the collection count() method

        /*select last two products*/
        $mini_cart_products = collect($carts->slice(-2));

        $mini_cart_products = $mini_cart_products->map(function ($item) {
            if (is_array($item)) {
                $item = (object) $item;
            }

            if (is_object($item) && isset($item->product_name)) {
                return $item;
            }

            return null;
        })->filter();

        $mini_cart_products = $mini_cart_products->values();

        return view('frontend.checkout', $miniCartData, ([
            'carts' => $carts,
            'total' => $total
        ]));
    }



    public function addProduct(Request $request){

        $miniCartData = getMiniCartProducts();
        $cart_count = $miniCartData['cart_count'];
        $mini_cart_products = $miniCartData['mini_cart_products'];


        return view('frontend.add-product', ([
            'cart_count' => $cart_count,
            'mini_cart_products' => $mini_cart_products
        ]));
    }

    public function uploadProduct(Request $request){

        //dd($request->all());
        $input['image'] = time() . '.' . $request->image->getClientOriginalExtension();
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $product_name = $request->name;
        $product_description = $request->description;
        $old_price = $request->old_price;
        $new_price = $request->new_price;
        $category = $request->category;
        $image = $imageName;




        Product::create([
            'category_id' => $category,
            'name' => $product_name,
            'description' => $product_description,
            'old_price' => $old_price,
            'new_price' => $new_price,
            'image' => $image,
        ]);

        return response('Product Added Successfully');

    }




   /* public function addToCart(Request $request){


        if (auth()->user()->id == ''){
            return redirect()->route('account');
        }


        $product = Product::where('id', $request->product_id)->first();

        if ($request->quantity == ''){
            $quantity = 1;
        }else{
            $quantity = $request->quantity;
        }

        Cart::create([
           'user_id' =>  auth()->user()->id,
           'product_name' =>  $product->name,
           'amount' =>  $product->new_price,
           'product_price' =>  $product->new_price,
           'quantity' => $quantity,
           'product_image' => $product->image,
        ]);

        return response('Product Added To Cart Successfully');
    }*/


    public function addToCart(Request $request){

        // Check if user is authenticated
        if (!auth()->check()){

            // Check if session cart exists, otherwise create one
            if (!$request->session()->has('cart')){
                $request->session()->put('cart', []);
            }

            // Get the current cart from session
            $cart = $request->session()->get('cart');

            // Check if product is already in cart
            if (isset($cart[$request->product_id])) {
                // Add new quantity to existing quantity
                $cart[$request->product_id]['quantity'] += $request->quantity;
            } else {



                // Add product to cart with quantity from the form
                $product = Product::find($request->product_id);

                $cart[$product->id] = [
                    'product_name' => $product->name,
                    'amount' => $product->new_price,
                    'product_price' => $product->new_price,
                    'quantity' => $request->quantity,
                    'product_image' => $product->image,
                ];
            }

            // Update cart in session
            $request->session()->put('cart', $cart);

            return response('Product Added To Cart Successfully');
        }

        /*get the product details*/
        $product = Product::where('id', $request->product_id)->first();
        //dd( $product->name);

        if ($request->quantity == ''){
            $quantity = 1;
        }else{
            $quantity = $request->quantity;
        }

        //dd($product->quanity);
        /*check if user has the product in cart already*/

        $existing_cart = Cart::where('user_id', auth()->user()->id)
            ->where('product_name', $product->name)
            ->first();


        //dd($existing_cart->quantity + $quantity);
        if ($existing_cart){
            //dd('Product exist in cart');

            //dd($existing_cart->quantity + $quantity);

            //dd($product->id);

            Cart::where('id', $existing_cart->id)->update([
                'quantity' => $existing_cart->quantity + $quantity
            ]);
        }else{
            //dd('Product does not exist in cart');

            Cart::create([
                'user_id' => auth()->user()->id,
                'product_name' => $product->name,
                'amount' => $product->new_price,
                'product_price' => $product->new_price,
                'quantity' => $quantity,
                'product_image' => $product->image,
            ]);
        }




        return response('Product Added To Cart Successfully');
    }



    public function removeCart(Request $request){


        $product = Cart::where('id', $request->product_id)->delete();

        return back()->with('success', 'Product has been removed from cart');
    }


    public function viewCart(Request $request){

        if (!auth()->check()) {

            $cart = $request->session()->get('cart', []);
            $cart_count = count($cart);
            $cart = collect($cart); // convert the array to a collection

            $mini_cart_products = collect($cart->slice(-2));

            $mini_cart_products = $mini_cart_products->map(function ($item) {
                if (is_array($item)) {
                    $item = (object) $item;
                }

                if (is_object($item) && isset($item->product_name)) {
                    return $item;
                }

                return null;
            })->filter();

            $mini_cart_products = $mini_cart_products->values();

            return view('frontend.cart.guest-cart',([
                'cart' => $cart,
                'cart_count' => $cart_count,
                'mini_cart_products' => $mini_cart_products,
            ]));



        }else{



            $carts = Cart::select(DB::raw('MAX(id) as id'), 'product_name', 'product_price', 'product_image', DB::raw('SUM(quantity) as total_quantity'))
                ->where('user_id', auth()->user()->id)
                ->groupBy('product_name', 'product_price', 'product_image')
                ->get();

            $cart_count = $carts->count(); // use the collection count() method

            /*select last two products*/
            $mini_cart_products = collect($carts->slice(-2));

            $mini_cart_products = $mini_cart_products->map(function ($item) {
                if (is_array($item)) {
                    $item = (object) $item;
                }

                if (is_object($item) && isset($item->product_name)) {
                    return $item;
                }

                return null;
            })->filter();

            $mini_cart_products = $mini_cart_products->values();


            return view('frontend.cart.member-cart', ([
                'carts' => $carts,
                'cart_count' => $cart_count,
                'mini_cart_products' => $mini_cart_products,
            ]));
        }
    }



    public function viewGuestCart(Request $request){
        // Get the cart items from the session
        $cart = $request->session()->get('cart', []);

        dd($cart);
        return view('cart', compact('cart'));



    }





}
