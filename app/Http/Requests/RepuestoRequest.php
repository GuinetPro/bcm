<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepuestoRequest extends FormRequest
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


    public function messages()
    {
        return [
            'required' => 'El campo  :attribute  es obligatorio.'       
        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'nombre' => 'required|max:150',
            'precio' => 'required',
            'codigo' => 'required',
            'stock'   => 'required'
        ];
    }
}
