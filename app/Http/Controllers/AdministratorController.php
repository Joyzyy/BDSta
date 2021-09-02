<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    public function viewAdmin() {
        $bd = DB::table('order')->join('products', 'order.product_id', '=', 'products.id')->select('products.*')->get();

        if (Auth::user()->name == "bdsta") {
            return view('admin.administrator', [
                "produse" => $bd
            ]);
        } else {
            return redirect('/');
        }
    }
}
