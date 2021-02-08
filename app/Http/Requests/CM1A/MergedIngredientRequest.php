<?php

namespace App\Http\Requests\CM1A;

use Illuminate\Foundation\Http\FormRequest;

class MergedIngredientRequest extends FormRequest
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
        // $id_merge = is_null($this->route('ingredient')) ? null : $this->route('ingredient')->id_merge;
        return [
            'new_item' => ['required', 'string'],
            'ing1' => ['required', 'string'],
            'ing2' => ['required', 'string'],
            'multi' => ['required', 'numeric'],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
