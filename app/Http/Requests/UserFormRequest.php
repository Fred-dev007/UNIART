<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
          'name'=>['required','string'],
          'email'=> ['required','email'],
          'password'=>['required ','min:6']
        ];
    }

    //Définition des différents message d'erreur
    public function messages(): array
    {
        return[
            'name.required'=>'Veillez renseigner le nom!',
            'email.required'=>'Veillez renseigner l\'email!',
            'password.required'=>'Veillez renseigner le mot de passe!',
            'name.string'=>'Le nom doit être une chaîne de caractère.',
            'email.email'=>'l\'email doit être valide.',
            'password.min'=>'Le mot de passe doit contenir au moins 6 caractère.'
        ];
    }
}
