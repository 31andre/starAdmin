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
            $validation->session()->regenerate();

            return redirect()->intended('dashboard')->with('Votre compte a été creer success');
       }
       
       else
            return redirect()->back()->with('error', 'le login ou le mot de passe est incorrect');

       
    }


    public function Register():view {

        return view('samples.register');
    }

    public function handleRegister(User $user, LoginRequest $request) {

         $user->name = $request->nom;
         $user->email = $request->email;
         $user->password = $request->password;
         $user->save();
        return redirect()->intended('dashboard');
        
    }

    public function messages() {

        return [
            'email.required' => 'le champ e-mail est requis',
            'MotPass.required' => 'le mot de passe est requis',
            'MotPass.min' => 'le mot de passe doit est superieur ou égale à 6 caractère'
        ];
    }
    

    
}
