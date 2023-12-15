<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    

    public function Register():view {
 
        return view('samples.register');
        
    }

    public function handleRegister(User $user, Request $request) {

         $user->name = $request->nom;
         $user->email = $request->email;
         $user->password = $request->password;
        //  dd($user);
         $user->save();
        return redirect()->intended('home');
        
    }

        

    public function messages() {

        return [
            'email.required' => 'le champ e-mail est requis',
            'MotPass.required' => 'le mot de passe est requis',
            'MotPass.min' => 'le mot de passe doit est superieur ou égale à 6 caractère'
        ];
    }
    

    
}
