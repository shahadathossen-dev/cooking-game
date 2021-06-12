<?php

namespace App\Http\Requests\CM3;

use Illuminate\Foundation\Http\FormRequest;

class LevelRequest extends FormRequest
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
            'lvl_name' => ['required', 'string'],
            'lvl_score' => ['required', 'numeric'],
        ];
    }
}
