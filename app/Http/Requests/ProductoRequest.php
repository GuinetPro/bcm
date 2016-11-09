<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            
            'nombre'        => 'required|max:50',
            'codigo'        => 'required|max:50',
            'categoria_id'  => 'required',
            'marca_id'      => 'required',
            'modelo_id'     => 'required',
        ];
    }
}
