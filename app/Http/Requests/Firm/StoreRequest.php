<?php

namespace App\Http\Requests\Firm;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'string',
            'registration_sity'=>'nullable|string',
            'index'=>'nullable|integer',
            'real_adress'=>'nullable|string',
            'legal_adress'=>'nullable|string',
            'phone'=>'nullable|string',
            'logo'=>'nullable|string',
            'website'=>'nullable|string',
            'direction'=>'nullable|text',
            'values'=>'nullable|values',
        ];
    }
}
