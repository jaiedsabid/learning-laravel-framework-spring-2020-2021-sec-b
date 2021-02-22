<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editRequest extends FormRequest
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
            'username'=>'sometimes|required|unique:users,username,'.$this->id.',user_id',
            'password'=>'required|min:4',
            'email'=>'sometimes|required|email:rfc|unique:users,email,'.$this->id.',user_id'
        ];
    }

    public function messages() {
        return [
            'email.unique'=>'This :attribute address has already been used.'
        ];
    }
}
