<?php

namespace App\Http\Requests;

use App\Models\Tier;
use App\Rules\UniqueInsensitiveRule;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class TierStoreRequest extends FormRequest
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
            'name' => ['required', new UniqueInsensitiveRule(Tier::getTableName(), 'name')],
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
