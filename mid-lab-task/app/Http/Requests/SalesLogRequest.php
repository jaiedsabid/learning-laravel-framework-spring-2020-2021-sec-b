<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalesLogRequest extends FormRequest
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
            'import' => 'file|mimes:xlsx,xls|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'import.max' => 'The file size may not be grater than 5MB',
        ];
    }
}
