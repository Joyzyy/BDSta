<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function viewProduct() {
        $current_route_name = Route::currentRouteName();

        $produs = Product::all();

        return view('categorii.shop', [
            'produs' => $produs
        ]);
    }

    public function doProduct($name) {
        $produs_specific = Product::where('name', $name)->get();
        $produs = Product::all();

        return view('categorii.produs', [
            'produs_specific' => $produs_specific,
            'toate_produsele' => $produs
        ]);
    }

    public function addToCart(Request $request) {
        if (!(Auth::guest())) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function cartItems() {
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', Auth::user()->id)->select('products.*', 'cart.id as cartid')->get();
        
        return view('categorii.cos', [
            'produse' => $products,
        ]);
    }

    public function checkout() {
        $products = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', Auth::user()->id)->select('products.*')->get();
        return view('categorii.checkout', [
            'produse' => $products
        ]);
    }

    public function removeFromCart($cart_id) {
        Cart::destroy($cart_id);
        return redirect('cos');
    }
}
