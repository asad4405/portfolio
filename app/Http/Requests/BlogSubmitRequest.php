<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogSubmitRequest extends FormRequest
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
            'title' => 'required|unique:blogs,title',
            'short_details' => 'required',
            'long_details' => 'required',
            'date' => 'required',
            'thumb_img' => 'required',
            'main_img' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'category_id' => 'Enter Category Here ...',
            'title' => 'Enter Title Here ...',
            'short_details' => 'Enter Short Details Here ...',
            'long_details' => 'Enter Long Details Here ...',
            'date' => 'Enter Date Here ...',
            'thumb_img' => 'Enter Thumbnail Image Here ...',
            'main_img' => 'Enter Main Image Here ...',
        ];
    }
}
