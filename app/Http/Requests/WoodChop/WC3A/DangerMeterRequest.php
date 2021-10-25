<?php

namespace App\Http\Requests\WoodChop\WC3A;

use App\Rules\HigherArchy;
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
            'left' => ['required', 'numeric', new HigherArchy(request()->get('color'))],
            'right' => ['required', 'numeric', new HigherArchy(request()->get('color'))],
            'front' => ['required', 'numeric', new HigherArchy(request()->get('color'))],
            'back' => ['required', 'numeric', new HigherArchy(request()->get('color'))],
        ];
    }
}
