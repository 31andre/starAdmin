<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',
            'numero' => 'required',
            'email' => 'required', 'email',
            'password' => 'required'
        ];
    }

    public function messages() {

        return [
            'email.required' => 'le champ e-mail est requis',
            'MotPass.required' => 'le mot de passe est requis',
            'MotPass.min' => 'le mot de passe doit est superieur ou égale à 6 caractère'
        ];
    }
}
