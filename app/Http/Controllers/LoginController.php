<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $fieldName = (filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) ? 'email' : 'username';

        if (Auth::attempt([$fieldName => $request->input('email'), 'password' => $request->input('password')], true)) {
                    
            return redirect('admin/dashboard');
        }

        return redirect('user/login')->withErrors(['message' => "user not found"]);
    }
}