<?php

namespace App\Http\Requests;

use App\Models\Tier;
use App\Rules\UniqueInsensitiveRule;
use Illuminate\Foundation\Http\FormRequest;

class TierUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            'name' => 'required',
            'is_active' =>'boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Harus diisi',
        ];
    }
}
