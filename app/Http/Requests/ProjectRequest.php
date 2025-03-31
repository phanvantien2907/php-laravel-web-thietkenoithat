<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            // check validate cho project
            'title' => 'required',
            'category_id' => 'required|exists:category,category_id',
            'description' => 'required |string',
            'detail' => 'required |string',
            'meta_title' => 'required | string',
            'meta_description' => 'required | string',
            'is_active' => 'required|in:0,1',
        ];
    }
}
