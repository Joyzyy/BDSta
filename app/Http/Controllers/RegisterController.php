<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function Register() {
        return view('auth.register');
    }

    public function doRegister(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:30',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('/');
    }
}
