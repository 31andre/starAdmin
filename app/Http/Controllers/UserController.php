<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use illuminate\support\facades\Auth;

class UserController extends Controller
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

            return redirect()->intended('dashboard')->with("Connecté");
       }
       
       else
            return redirect()->back()->with('error', 'le login ou le mot de passe est incorrect');

       
    }


    public function Register():view {

        if(Auth()->guest()){
            
            return view('samples.register');
        } 
        else
            redirect('login');
    }

    public function handleRegister(User $user, LoginRequest $request) {

         $user->name = $request->nom;
         $user->email = $request->email;
         $user->password = $request->password;
         $user->save();
        return redirect()->intended('dashboard');
        
    }

    public function Logout(Request $request): RedirectResponse {

        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }       

    public function messages() {

        return [
            'email.required' => 'le champ e-mail est requis',
            'MotPass.required' => 'le mot de passe est requis',
            'MotPass.min' => 'le mot de passe doit est superieur ou égale à 6 caractère'
        ];
    }
    

    
}
