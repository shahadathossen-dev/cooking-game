<?php

namespace App\Models\CM2A;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IngredientPriority extends Model
{
    use HasFactory;

    protected $table = '2A_ing_priority';
    protected $primaryKey  = 'id_ing_priority';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
