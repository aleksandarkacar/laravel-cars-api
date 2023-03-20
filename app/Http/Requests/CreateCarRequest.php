<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'model' =>  'required|string|max:255',
            'year' =>  'required|int|min:1990|max:2023',
            'max_speed' =>  'int|min:20|300',
            'isautomatic' =>  'required|int|min:0|max:1',
            'engine' =>  'required',
            'number_of_doors' =>  'required|min:2|max:5',
            'brand' =>  'required|string|min:5'
        ];
    }
}
