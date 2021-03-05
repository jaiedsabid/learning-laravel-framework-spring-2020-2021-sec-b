<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductManageRequest extends FormRequest
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
            'confirm' => 'required|regex:/Yes/i'
        ];
    }

    public function messages()
    {
        return [
            'confirm.regex' => 'Please enter the keyword shown above.'
        ];
    }
}
