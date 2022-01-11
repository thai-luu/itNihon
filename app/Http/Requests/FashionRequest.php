<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FashionRequest extends FormRequest
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
            'species' => 'required', 
            'description' => 'required', 
            'style' => 'required', 
            'sex' => 'required', 
            'img_url' => 'required',
            'sold' => 'required',
            'price' => 'required',
            'quantity1' => 'required',
            'quantity2' => 'required',
            'quantity3' => 'required',
            'quantity4' => 'required',
            'quantity5' => 'required',
        ];
    }
    public function messages()
{
    return [
        'quantity1.required' => 'Size S is required',
        'quantity2.required' => 'Size M is required',
        'quantity3.required' => 'Size L is required',
        'quantity4.required' => 'Size XL is required',
        'quantity5.required' => 'Size XXL is required',
       
    ];
}
}
