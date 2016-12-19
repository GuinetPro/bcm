<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function messages()
    {
        return [
            'required' => 'El campo  :attribute  es obligatorio.',
            'email.email' => 'El campo  :attribute  no tiene un formato valido.',
            'confirmed' => 'El campo  :attribute  no coincide con el campo Confirmar Password.',         
        ];
    }

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
     * @return array
     */
    public function rules()
    {

        return [
            
            'nombre'        => 'required|max:150',
            'apellidoPaterno'  => 'required|max:150',
            'apellidoMaterno'    => 'required|max:150',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'email'     => 'email|email',
            'rol_id'         => 'required'
        ];
    }
}
