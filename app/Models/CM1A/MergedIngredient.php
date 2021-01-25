<?php

namespace App\Models\CM1A;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergedIngredient extends Model
{
    use HasFactory;

    protected $table = '1A_merge_list';
    protected $primaryKey  = 'id_merge';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'crete_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
