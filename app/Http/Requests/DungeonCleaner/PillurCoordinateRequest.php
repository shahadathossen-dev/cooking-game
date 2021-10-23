<?php

namespace App\Http\Requests\DungeonCleaner;

use Illuminate\Foundation\Http\FormRequest;

class PillurCoordinateRequest extends FormRequest
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
            'pc_row' => ['required', 'numeric'],
            'pc_col' => ['required', 'numeric'],
        ];
    }
}
