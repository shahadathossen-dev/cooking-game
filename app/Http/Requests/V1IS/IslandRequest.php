<?php

namespace App\Http\Requests\V1IS;

use Illuminate\Foundation\Http\FormRequest;

class MapRequest extends FormRequest
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
        $id_is_map = is_null($this->route('map')) ? null : $this->route('map')->id_is_map;
        return [
            'is_name' => ['required', 'string', 'unique:mysql3.v1_is_map,is_name,' . $id_is_map . ',id_is_map'],
            'is_zone1' => ['required', 'string'],
            'is_zone2' => ['required', 'string'],
            'is_zone3' => ['required', 'string'],
        ];
    }
}
