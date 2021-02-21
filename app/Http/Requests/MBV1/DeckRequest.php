<?php

namespace App\Http\Requests\MBV1;

use Illuminate\Foundation\Http\FormRequest;

class DeckRequest extends FormRequest
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
        $id_deck = is_null($this->route('deck')) ? null : $this->route('deck')->id_deck;
        return [
            'deck_name' => ['required', 'string', 'unique:mysql4.v1_deck,deck_name,' . $id_deck . ',id_deck'],
            'deck_description' => ['required', 'string'],
            'deck_type' => ['required', 'string'],
            'deck_power' => ['required', 'numeric'],
            'deck_health' => ['required', 'numeric'],
            'deck_gold' => ['required', 'numeric'],
            'deck_special' => ['required', 'string'],
        ];
    }
}
