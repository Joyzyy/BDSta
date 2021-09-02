<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function after_checkout() {
        return view('categorii.after_checkout');
    }

    public function backend(Request $request) {
        $produse = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', Auth::user()->id)->select('products.*')->get();
        $get_mainly_cart_id = DB::table('cart')->join('products', 'cart.product_id', '=', 'products.id')->where('cart.user_id', Auth::user()->id)->select('products.*', 'cart.id as cartid')->get();

        $valoare_totala = 0;
        for ($index = 0; $index < count($produse); $index++) {
          $valoare_totala += $produse[$index]->price;
        }

        $this->validate($request, [
            "nume_utilizator" => 'required',
            "nr_telefon" => 'required',
            "oras" => 'required',
            "prenume_utilizator" => 'required',
            "judet" => 'required',
            "adresa_livrare" => 'required',
            "pret_total",
        ]);
        
        $get_order_table_max_id = DB::table('order')->max('id');
        $order_id_by_max_id = DB::table('order')->where('id', $get_order_table_max_id)->get();

        for ($index = 0; $index < count($produse); $index++) {
            Order::create([
                "product_id" => $produse[$index]->id,
                "user_id" => Auth::user()->id,
                "nume" => $request->nume_utilizator,
                "prenume" => $request->prenume_utilizator,
                "numar_telefon" => $request->nr_telefon,
                "judet" => $request->judet,
                "oras" => $request->oras,
                "adresa" => $request->adresa_livrare,
                "pret_final" => $valoare_totala,
                "order_id" => $order_id_by_max_id[0]->order_id + 1
            ]);

            Cart::destroy($get_mainly_cart_id[$index]->cartid);
        }

        return redirect()->route('after-checkout');
    }
}
