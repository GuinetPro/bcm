<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GasfiterRequest extends FormRequest
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
            
            'nombre'       => 'required|max:200',
            'email'        => 'required|email',
            'telefono'     => 'required',
            'movil'        => 'required',
            'taller_id'    => 'required',
            'region_id'    => 'required',
            'comuna_id'    => 'required',
            'rut'          => 'required'
        ];
    }
}
