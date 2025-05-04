<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillSubmitRequest extends FormRequest
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
            'name' => 'required',
            'icon' => 'required',
            'color' => 'required',
            'percentage' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name' => 'Enter your Name',
            'icon' => 'Enter your Icon',
            'color' => 'Enter Color',
            'percentage' => 'Enter Percentage',
        ];
    }
}
