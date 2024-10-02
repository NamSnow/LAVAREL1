<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerIndex() {
        return view('pages.registerUser');
    }

    public function resgister(Request $request) {
        $fields = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        return redirect('/');
    }
}
