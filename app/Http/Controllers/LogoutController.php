<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller {
    public function doLogout() {
        auth()->logout();

        return redirect()->route('/');
    }
}
