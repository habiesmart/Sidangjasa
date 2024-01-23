<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartOrderUpdateRequest extends FormRequest
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
            'customer_id' => 'nullable|integer|exists:customers,id',
            'cart_details.*.product_id' => 'required|integer|exists:products,id',
            'cart_details.*.quantity' => 'required|integer|min:1',
        ];
    }
}
