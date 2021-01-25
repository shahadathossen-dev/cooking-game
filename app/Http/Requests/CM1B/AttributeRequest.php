<?php

namespace App\Http\Requests\CM1B;

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
            'hungry_time' => ['required', 'numeric'],
            'dispenser_start_freq' => ['required', 'numeric'],
            'dispenser_end_freq' => ['required', 'numeric'],
            'conveyor_start_speed' => ['required', 'numeric'],
            'conveyor_end_speed' => ['required', 'numeric'],
            'conveyor1_start_speed' => ['required', 'numeric'],
            'conveyor1_end_speed' => ['required', 'numeric'],
            'conveyor2_start_speed' => ['required', 'numeric'],
            'conveyor2_end_speed' => ['required', 'numeric'],
            'conveyor3_start_speed' => ['required', 'numeric'],
            'conveyor3_end_speed' => ['required', 'numeric'],
            'grade_score' => ['required', 'numeric'],
            'grade_A' => ['required', 'string'],
            'grade_B' => ['required', 'string'],
            'grade_C' => ['required', 'string'],
            'grade_D' => ['required', 'string'],
            'grade_E' => ['required', 'string'],
            'grade_F' => ['required', 'string'],
            'grade_S' => ['required', 'string'],
            'timer' => ['required', 'integer'],
            'trash_can_size' => ['required', 'integer'],
            'starting_happiness' => ['required', 'integer'],
            'bad_food_multi' => ['required', 'integer'],
        ];
    }
}
