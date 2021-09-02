<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome() {
        $produs = Product::all();
        
        return view('index', [
            'produs' => $produs
        ]);
    }
}
