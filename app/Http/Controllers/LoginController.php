<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function Login() {
        return view('auth.login');
    }

    public function doLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('eroare_login', 'Datele de conectare sunt incorecte.');
        }

        return redirect()->route('/');
    }
}
