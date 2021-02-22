<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class confirmDelRequest extends FormRequest
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
            'confirm'=>'required|regex:/^Yes$/'
        ];
    }

    public function messages() {
        return [
            'confirm.required'=>'The confirmation field must be filled correctly.',
            'confirm.regex'=>'You must type \'Yes\' to continue.'
        ];
    }
}
