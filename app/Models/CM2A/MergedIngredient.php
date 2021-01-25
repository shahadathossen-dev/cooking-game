<?php

namespace App\Models\CM2A;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergedIngredient extends Model
{
    use HasFactory;

    protected $table = '2A_merge_list';
    protected $primaryKey  = 'id_merge';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'crete_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
