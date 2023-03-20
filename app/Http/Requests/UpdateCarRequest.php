<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'model' => 'string|max:255',
            'year' => 'int|min:1990|max:2023',
            'max_speed' => 'int|min:20|max:300',
            'isautomatic' => 'int|min:0|max:1',
            'engine' => 'string',
            'number_of_doors' => 'int|min:2|max:5',
            'brand' => 'string|min:5'
        ];
    }
}
