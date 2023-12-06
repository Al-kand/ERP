<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ProductRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|min:10|max:255',
            'article' => 'required|ascii|unique:products,article',
            'status' => Rule::in(['Доступен', 'Не доступен']),
            'data' => 'required|array'
        ];

        switch ($this->getMethod()) {
            case 'POST':
                return $rules;
            case 'PUT':
                return [
                    'article' => [
                        'required',
                        'ascii',
                        Rule::unique('products')->ignore($this->article, 'article')
                    ]
                ] + $rules;
        }
    }
}
