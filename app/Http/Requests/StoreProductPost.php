<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
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
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'amount' => 'required',
            'expiration_date' => 'required',
            'cost' => 'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'El nombre del producto es requerido',
            'category.required'  => 'La categoría del producto es requerida',
            'description.required' => 'La descripción del producto es requerida',
            'amount.required' => 'La cantidad del producto es requerida',
            'expiration_date.required' => 'La fecha de vencimiento es requerida',
            'cost.required' => 'El costo del producto es requerido',
        ];
    }
}
