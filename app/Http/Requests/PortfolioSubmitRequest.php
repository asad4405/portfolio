<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioSubmitRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required',
            'image' => 'required',
            'details' => 'required',
            'link' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'category_id' => 'Enter Category Here ...',
            'title' => 'Enter Title Here ...',
            'image' => 'Enter Image Here ...',
            'details' => 'Enter Details Here ...',
            'link' => 'Enter Link Here ...',
        ];
    }
}
