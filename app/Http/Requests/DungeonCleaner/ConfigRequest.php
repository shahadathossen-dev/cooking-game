<?php

namespace App\Http\Requests\DungeonCleaner;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'data' => 'required|file|mimes:json,txt',
            'data' => 'required|json',
            // 'version' => 'required|string|max:255'
        ];
    }
}
