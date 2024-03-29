<?php

namespace App\Http\Requests\WoodChop\WC1B;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'branch_freq' => ['required', 'numeric'],
            'cat_freq' => ['required', 'numeric'],
            'timer' => ['required', 'numeric'],
            'bonus_time' => ['required', 'numeric'],
            'base_score' => ['required', 'numeric'],
            'min_score' => ['required', 'numeric'],
        ];
    }
}
