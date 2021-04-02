<?php

namespace App\Http\Requests\WoodChop\WC3A;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'shop_name' => ['required', 'string'],
            'wood_score' => ['required', 'numeric'],
            'cat_score' => ['required', 'numeric'],
            'wood_currency' => ['required', 'numeric'],
            'cat_currency' => ['required', 'numeric'],
            'physics_val' => ['required', 'numeric'],
            'wood_cost' => ['required', 'numeric'],
            'cat_cost' => ['required', 'numeric'],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
