<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            "heading_en" => "required|string",
            "heading_ar" => "required|string",
            "sub_heading_en" => "required|string",
            "sub_heading_ar" => "required|string",
            "vision_en" => "required|string",
            "vision_ar" => "required|string",
            "mission_en" => "required|string",
            "mission_ar" => "required|string",
            "approach_en" => "required|string",
            "approach_ar" => "required|string",
            "vision_image" => "nullable|image|mimes:png,jpg|max:2048",
            "mission_image" => "nullable|image|mimes:png,jpg|max:2048",
            "approach_image" => "nullable|image|mimes:png,jpg|max:2048",
        ];
    }
}
