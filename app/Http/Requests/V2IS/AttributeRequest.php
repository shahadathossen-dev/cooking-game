<?php

namespace App\Http\Requests\V2IS;

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
        return [
            'timer' => ['nullable', 'numeric'],
            'islandmovespeed' => ['nullable', 'numeric'],
            'islandacceleratespeed' => ['nullable', 'numeric'],
            'islanddeceleratespeed' => ['nullable', 'numeric'],
            'islandspeedpenalty' => ['nullable', 'numeric'],
            'islandsize_small' => ['nullable', 'numeric'],
            'islandsize_medium' => ['nullable', 'numeric'],
            'islandsize_big' => ['nullable', 'numeric'],
            'islandsize_boss' => ['nullable', 'numeric'],
            'islandgrowchance_red' => ['nullable', 'numeric'],
            'islandgrowchance_grey' => ['nullable', 'numeric'],
            'islandgrowchance_blue' => ['nullable', 'numeric'],
            'islandgrowchance_yellow' => ['nullable', 'numeric'],
            'mapspawn_zone1_small' => ['nullable', 'numeric'],
            'mapspawn_zone2_small' => ['nullable', 'numeric'],
            'mapspawn_zone3_small' => ['nullable', 'numeric'],
            'mapspawn_zone1_medium' => ['nullable', 'numeric'],
            'mapspawn_zone2_medium' => ['nullable', 'numeric'],
            'mapspawn_zone3_medium' => ['nullable', 'numeric'],
            'mapspawn_zone1_big' => ['nullable', 'numeric'],
            'mapspawn_zone2_big' => ['nullable', 'numeric'],
            'mapspawn_zone3_big' => ['nullable', 'numeric'],
            'mapspawn_zone1_boss' => ['nullable', 'numeric'],
            'mapspawn_zone2_boss' => ['nullable', 'numeric'],
            'mapspawn_zone3_boss' => ['nullable', 'numeric'],
        ];
    }
}
