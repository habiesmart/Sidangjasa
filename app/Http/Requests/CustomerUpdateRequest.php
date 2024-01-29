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
            'tier_id' => 'integer|required|min:1|exists:tiers,id',
            'name' => 'required|string|max:100',
            'pic' => 'required|string|max:100',
            'phone' => 'required|phone:US,ID|max:50',
            'address' => 'required|string|max:200'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'tier_id.min' => 'Tier tidak boleh kosong. Pilih Tiernya terlebih dahulu',
            'tier_id.exists' => 'Tier tidak valid!',
            'tier.required' => 'Tier wajib diisi',
            'name.required' => 'Nama wajib diisi',
            'pic.required' => 'PIC wajib diisi',
            'phone.required' => 'Nomer telepon wajib diisi',
            'phone.phone' => 'Nomer telepon bukan nomer telepon yang valid',
        ];
    }
}
