<?php

namespace App\Http\Requests\WoodChop\WC3A;

use Illuminate\Foundation\Http\FormRequest;

class DangerMeterRequest extends FormRequest
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
            'color' => ['required', 'string'],
            'left' => ['required', 'string'],
            'right' => ['required', 'string'],
            'front' => ['required', 'string'],
            'back' => ['required', 'string'],
        ];
    }
}
