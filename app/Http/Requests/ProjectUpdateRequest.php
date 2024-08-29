<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            "title_en" => "required|string",
            "title_ar" => "required|string",
            "description_en" => "required|string",
            "description_ar" => "required|string",
            "image" => "nullable|image|mimes:png,jpg|max:2048",
            "url" => "nullable|url"
        ];
    }
}
