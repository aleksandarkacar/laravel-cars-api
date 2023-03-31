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
            'model' =>  'string|max:255',
            'year' =>  'int|min:1990',
            'max_speed' =>  'int|min:20|max:300',
            'isautomatic' =>  'boolean',
            'engine' =>  'in:petrol,diesel,electric,hybrid',
            'number_of_doors' =>  'integer|min:2|max:5',
            'brand' =>  'string|min:5'
        ];
    }
}
