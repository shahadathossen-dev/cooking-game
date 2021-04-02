<?php

namespace App\Http\Requests\WoodChop\WC3A;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
            'grade_name' => ['required', 'string'],
            'grade_value' => ['required', 'numeric'],
        ];
    }
}
