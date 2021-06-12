<?php

namespace App\Http\Requests\CM3;

use Illuminate\Foundation\Http\FormRequest;

class PlateCombRequest extends FormRequest
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
            'plate1' => ['required', 'string'],
            'plate2' => ['required', 'string'],
            'new_plate' => ['required', 'string'],
            // 'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
