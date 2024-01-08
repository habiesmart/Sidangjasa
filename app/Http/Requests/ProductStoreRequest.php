<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'prices.*' =>'required',
            'prices.*.unit' => 'required|present',
        ];
    }

    public function message()
    {
        return [
            'prices.*.unit.required' => 'Harus adaa',
        ];
    }

    // public $validator = null;
    // protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    // {
    //     $this->validator = $validator;
    // }
}
