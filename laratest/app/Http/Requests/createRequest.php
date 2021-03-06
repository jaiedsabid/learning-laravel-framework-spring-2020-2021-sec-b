<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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
            'username'=>'required|unique:users',
            'password'=>'required|min:4',
            'email'=>'required|email:rfc|unique:users'
        ];
    }

    public function messages() {
        return [
            'email.unique'=>'This :attribute address has already been used.'
        ];
    }
}
