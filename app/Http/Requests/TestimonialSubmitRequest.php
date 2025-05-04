<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialSubmitRequest extends FormRequest
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
            'client_name' => 'required',
            'client_sector' => 'required',
            'details' => 'required',
            'image' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'client_name' => 'Enter Company Name / Client Name Here ...',
            'client_sector' => 'Enter Client Sector Here ...',
            'details' => 'Enter Details Here ...',
            'image' => 'Enter Image Here ...',
        ];
    }
}
