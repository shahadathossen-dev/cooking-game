<?php

namespace App\Http\Requests\CM1A;

use Illuminate\Foundation\Http\FormRequest;

class IngredientPriorityRequest extends FormRequest
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
            'ing' => ['required', 'string'],
            'priority' => ['required', 'numeric'],
        ];
    }
}
