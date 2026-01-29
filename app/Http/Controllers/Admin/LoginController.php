<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController 
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
          
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        
        $remember = $request->has('remember');

        if (auth()->guard('admin')->attempt($credentials, $remember)) {
            return redirect()->route('admin.dashboard');
        } 
        else {
            return redirect()->back()
                             ->withInput($request->only('email', 'remember'))
                             ->withErrors(['login_failed' => 'Invalid email or password']);
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('login');
    }
}
