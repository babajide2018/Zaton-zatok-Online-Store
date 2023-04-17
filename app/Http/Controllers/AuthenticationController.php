<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    //

    public function account(Request $request){


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

            return view('authentication.account',([
                'cart' => $cart,
                'cart_count' => $cart_count,
                'mini_cart_products' => $mini_cart_products,
            ]));



        }else {

            $cart = Cart::all();
            $cart_count = $cart->count(); // use the collection count() method

            /*select last two products*/
            $mini_cart_products = collect($cart->slice(-2));

            $mini_cart_products = $mini_cart_products->map(function ($item) {
                if (is_array($item)) {
                    $item = (object)$item;
                }

                if (is_object($item) && isset($item->product_name)) {
                    return $item;
                }

                return null;
            })->filter();

            $mini_cart_products = $mini_cart_products->values();

            return view('authentication.account', ([
                'cart' => $cart,
                'cart_count' => $cart_count,
                'mini_cart_products' => $mini_cart_products,
            ]));
        }
    }

    public function register(Request $request){

        //dd($request->all());
        User::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'address' => $request->address,
           'password' => Hash::make($request->password)
        ]);

        return response('Account Created Successfully, You can now login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('welcome')
                ->withSuccess('You are logged in Successfully');
        }
        return back()
            ->with('error','Wrong Credentials');
    }

    public function logout(){

        Auth::logout();

        return back()->with('success', 'logout successfully');
    }


    public function welcome(){

        if (!auth()->check()) {

        return redirect()->route('account')->with('error', 'Kindly Login or Register if you are a new member');
        }
        return view('frontend.welcome');
    }

}
