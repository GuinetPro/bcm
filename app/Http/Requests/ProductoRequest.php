<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            
            'modelo'                 => 'required|max:200',
            'codigo'                 => 'required|max:50',
            'categoria_id'           => 'required',
            'marca_id'               => 'required',
            'tipo_gas_id'            => 'required',
            'tiro_id'                => 'required',
            'litraje_id'             => 'required',
            'tipo_producto_id'       => 'required',
            'categoria_id'           => 'required',
            'tipo_planta_id'         => 'required',
            'tipo_especificacion_id' => 'required',

        ];
    }
}
