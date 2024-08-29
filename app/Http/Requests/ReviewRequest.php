<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            "name_en" => "required|string",
            "name_ar" => "required|string",
            "position_en" => "required|string",
            "position_ar" => "required|string",
            "review_ar" => "required|string",
            "review_en" => "required|string",
            "image" => "required|image|mimes:png,jpg",
        ];
    }
}
