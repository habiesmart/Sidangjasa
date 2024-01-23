<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartAddProductToCartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_id' => 'integer|required|exists:products,id',
            'quantity' => 'integer|required|min:1',
            'price' => 'integer|required|min:1',
        ];
    }
}
