<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class blogRequest extends FormRequest
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
            // check validate blog
            'title' => 'required',
            'user_id' => 'required|exists:users,user_id',
            'description' => 'required|string',
            'detail' => 'required| string',
            'image' => 'required| string',
            'is_active' => 'required|in:0,1',
        ];
    }
}
