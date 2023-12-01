<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'lang' => 'nullable|string|max:2',
            'cityOrCountry' => 'required|string|max:50',
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
            '*.required' => __('Lütfen :attribute alanını doldurunuz!'),
            '*.string' => __('Lütfen :attribute alanını metin olarak doldurunuz!'),
            '*.max' => __('Lütfen :attribute alanını :max karakterden fazla girmeyiniz!'),
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'lang' => __('Dil'),
            'cityOrCountry' => __('Şehir veya Ülke'),
        ];
    }
}
