<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'fullname' => 'required|min:3|max:30|regex:/[a-zA-Z]/i',
            'username' => 'required',
            'email' => 'email:rfc|required|min:10|max:50',
            'password' => 'required|confirmed|min:8|max:20|regex:/[a-zA-Z0-9]/i',
            'city' => 'required|min:3|max:20',
            'country' => 'required|min:3|max:20',
            'company' => 'min:3|max:20',
            'phone' => 'required|between:11,15|regex:/[0-9]/i'
        ];
    }

    public function messages()
    {
        return [
            'fullname.regex' => 'You must write your name in alphabetic.',
            'password.regex' => 'Password must be in alpha-numeric.',
            'phone.regex' => 'Phone number must be in correct format.'
        ];
    }
}
