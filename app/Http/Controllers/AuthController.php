<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === 'admin@admin.com' && $request->password === 'admin') {
            return redirect('/home');
        } elseif ($request->email === 'testuser@gmail.com' && $request->password === 'testuser') {
            return redirect('/userindex');
        } else {
            return back()->withErrors(['Invalid credentials']);
        }
    }
}
