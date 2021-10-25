<?php

namespace App\Rules;

use App\Models\WoodChop\WC3A\DangerMeter;
use Illuminate\Contracts\Validation\Rule;

class HigherArchy implements Rule
{
    protected $color;
    protected $colors = ['Red', 'Yellow', 'Green'];
    protected $value;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->value = $value;
        if (($key = array_search($this->color, $this->colors)) !== false) {
            unset($this->colors[$key]);
        }
        $otherValues = DangerMeter::whereIn('color', $this->colors)->pluck($attribute)->sort()->toArray();
        if ($this->color === 'Red') {
            if ($value < 0) {
                $greaterValue = array_filter($otherValues, function ($n) use ($value) {
                    return $value > $n;
                });
                return !count($greaterValue);
            } else {
                $lessValue = array_filter($otherValues, function ($n) use ($value) {
                    return $value < $n;
                });
                return !count($lessValue);
            }
        } else if ($this->color === 'Yellow') {
            return ($otherValues[0] < $value) && ($value < $otherValues[1]);
        } else if ($this->color === 'Green') {
            if ($value < 0) {
                $lessValue = array_filter($otherValues, function ($n) use ($value) {
                    return $value < $n;
                });
                return !count($lessValue);
            }
             else {
                $greaterValue = array_filter($otherValues, function($n) use ($value) {
                    return $value > $n;
                });
                return !count($greaterValue);
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if ($this->color === 'Red') {
            if ($this->value < 0)
                return __('The :attribute must be less than Green and Yellow');
            return __('The :attribute must be greter than Green and Yellow');
        } else if ($this->color === 'Yellow') {
            return __('The :attribute must be between Red and Green');
        } else if ($this->color === 'Green') {
            if ($this->value < 0)
                return __('The :attribute must be greater than Red and Yellow');
            return __('The :attribute must be less than Red and Yellow');
        }
    }
}
