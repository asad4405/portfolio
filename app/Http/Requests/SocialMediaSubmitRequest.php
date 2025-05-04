<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialMediaSubmitRequest extends FormRequest
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
            'title' => 'required',
            'icon' => 'required',
            'link' => 'required',
            'color' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title' => 'Enter Title Here ...',
            'icon' => 'Enter Title Icon Here ...',
            'link' => 'Enter Title Link Here ...',
            'color' => 'Enter Title Color Here ...',
        ];
    }
}
