<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationSubmitRequest extends FormRequest
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
            'year_title' => 'Enter your Education Year',
            'course_name' => 'Enter your Course Name',
            'institute_name' => 'Enter your Institute Name',
        ];
    }
}
