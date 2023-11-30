<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function Login():view {

        return view('samples.login');
    }

    public function handleLogin(Request $request) {

        $validation = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required']
        ]);
    
 
        if(Auth::attempt($validation)){
 
             $request->session()->regenerate();
 
             return redirect()->intended('home');
        }
        
        else
             return redirect()->back()->with('error', 'le login ou le mot de passe est incorrect');
 
        
     }

     public function Logout(Request $request): RedirectResponse {

        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }   
}
