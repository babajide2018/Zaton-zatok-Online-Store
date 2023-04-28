<?php

use App\Models\Product;
use App\Models\Cart;

function getMiniCartProducts() {

   // dd('hello');
    $products = Product::all();
    $carts = Cart::all()->count();

    if (!auth()->check()) {
        $cart = request()->session()->get('cart', []);
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

    return [
        'products' => $products,
        'cart' => $cart,
        'cart_count' => $cart_count,
        'mini_cart_products' => $mini_cart_products,
    ];
}
