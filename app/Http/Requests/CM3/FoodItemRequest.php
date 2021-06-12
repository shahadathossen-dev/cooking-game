<?php

namespace App\Http\Requests\CM3;

use Illuminate\Foundation\Http\FormRequest;

class FoodItemRequest extends FormRequest
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
            'food_name' => ['required', 'string'],
            'plate_color' => ['required', 'string'],
            'food_rarity' => ['required'],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
