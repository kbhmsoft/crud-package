<?php

namespace Khalid\CrudPackage\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            // Add more rules for other fields
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            // Add more custom error messages
        ];
    }
}
