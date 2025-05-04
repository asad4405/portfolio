<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounterSubmitRequest extends FormRequest
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
            'count' => 'required',
            'plus' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title' => 'Enter Title Here ...',
            'count' => 'Enter Count Here ...',
        ];
    }
}
