<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePemerintahRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'isi_1' => 'required',
            'isi_2' => 'required',
            'gambar_1' => 'image|mimes:jpeg,png,jpg|max:2048',
            'gambar_2' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
}
