<?php

namespace App\Http\Requests\DungeonCleaner;

use Illuminate\Foundation\Http\FormRequest;

class TileSpawnRequest extends FormRequest
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
            'tile_spawn_name' => ['required', 'string'],
            'tile_spawn_min' => ['required', 'numeric'],
            'tile_spawn_max' => ['required', 'numeric'],
        ];
    }
}
