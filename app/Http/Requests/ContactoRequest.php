<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => ['required','max:100','min:2'],
            'mail' => ['required','max:100'],
            'telefono' => ['required','numeric', 'gt:999999'],
            'mensaje'=> ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es un campo obligatorio.',
            'nombre.max' => 'La longitud maxima del nombre es 100 caracteres.',
            'nombre.min' => 'La longitud minima del nombre es 2 caracteres',
            'mail.required' => 'El mail es un campo obligatorio.',
            'mail.max' => 'La longitud maxima del mail es 100 caracteres.',
            'telefono.required' => 'El telefono es un campo obligatorio.',
            'telefono.numeric' => 'El telefono es un campo que solo puede tener numeros.',
            'telefono.gt' => 'El telefono tiene que tener al menos 7 digitos.',
            'mensaje.required' => 'El mensaje es un campo obligatorio.'
        ];
    }
}
