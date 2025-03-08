<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTreeRequest extends FormRequest
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
            "species" => "string|required|max:50",
            "circumference" => "integer|gt:0|required",
            "settlement" => "string|required|max:50",
            "year" => "integer|gt:0|required",
            "county_id" => "integer|exists:counties,id"
        ];
    }
}
