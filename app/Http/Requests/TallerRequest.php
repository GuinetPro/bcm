<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallerRequest extends FormRequest
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
            
            'nombre'        => 'required|max:200',
            'razon_social'  => 'required|max:150',
            'Codigo_Sap'    => 'required',
            'email'         => 'required',
            'direccion'     => 'required',
            'comuna_id'     => 'required',
        ];
    }
}
