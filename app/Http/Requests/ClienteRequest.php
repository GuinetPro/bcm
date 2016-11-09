<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{

    public function messages()
    {
        return [
            'required' => 'El campo  :attribute  es obligatorio.',
            'email.email' => 'El campo  :attribute  no tiene un formato valido.'         
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
            
            'nombre' => 'required|max:50',
            'apellidoPaterno' => 'required|max:50',
            'apellidoMaterno' => 'required|max:50',
            'rut'   => 'required|max:12',
            'email' => 'required|email',
        ];
    }
}
