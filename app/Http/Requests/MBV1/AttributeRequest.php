<?php

namespace App\Http\Requests\MBV1;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
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
        $id_config = is_null($this->route('attribute')) ? null : $this->route('attribute')->id_config;
        return [
            'minion' => ['required', 'string', 'unique:mysql4.v1_config,minion,' . $id_config . ',id_config'],
            'effect' => ['required', 'string'],
            'deck' => ['required', 'string'],
            'playerhealth' => ['required', 'numeric'],
            'currentgold' => ['required', 'numeric'],
            'currenthealth' => ['required', 'numeric'],
        ];
    }
}
