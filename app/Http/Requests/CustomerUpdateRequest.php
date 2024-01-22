<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'tier_id' => 'required|exists:tiers,id|min:1|integer',
            'name' => 'required|string|max:100',
            'pic' => 'required|string|max:100',
            'phone' => 'required|phone:US,ID|max:50',
            'address' => 'required|string|max:200'
        ];
    }
}
