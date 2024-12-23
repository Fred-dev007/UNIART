<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesFormRequest extends FormRequest
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
            'title'=>["required","string"],
            'image'=>['required','mimes:jpeg,png,jpg,gif,svg','max:2048','image'],
            'content'=>['nullable','string'],
            'file_path'=>["file","nullable","mimes:pdf"],
            'description'=>['required','string'],

        ];
    }

    //Définition des différents message d'erreur
    public function messages(): array
    {
        return[
            "title.required"=> "Veillez renseigner le titre.",
            "description.required"=> "Veillez renseigner le description.",
            "title.string"=> "Le titre doit être une chaîne de caractère.",
            "image.mimes"=>"Veillez choisir un autre format d'image.",
            "image.image"=>"Veillez choisir une image",
            "image.required"=>"L'image est requis.",
            "content.string"=>"Le contenue doit être une chaine de caractère.",
            "file_path.file"=>"Veillez choisir un fichier.",
            "file_path.mimes"=>"Votre fichier doit être un pdf"
        ];
    }
}
