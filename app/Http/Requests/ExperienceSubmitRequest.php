<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceSubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '*' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'icon' => 'Enter your Experience Icon',
            'exp_position' => 'Enter your Experience Position',
            'details' => 'Enter your Experience Details',
            'position' => 'Enter your Experience Position',
        ];
    }
}
