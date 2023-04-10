<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        if ($request->isMethod('post')) {
            return redirect()->route('dashboard');
        }
    }
}