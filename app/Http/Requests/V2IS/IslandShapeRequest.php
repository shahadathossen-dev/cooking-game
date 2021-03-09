<?php

namespace App\Http\Requests\V2IS;

use Illuminate\Foundation\Http\FormRequest;

class IslandShapeRequest extends FormRequest
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
            'is_zone' => ['required', 'string'],
            'is_chance' => ['required', 'string'],
            'is_column' => ['required', 'string'],
        ];
    }
}
