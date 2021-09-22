<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdministratorController extends Controller
{
    public function viewAdmin() {
        if (Auth::user()->name == "bdsta") {
            return view('admin.administrator', []);
        } else {
            return redirect('/');
        }
    }
}
