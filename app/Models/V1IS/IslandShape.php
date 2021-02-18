<?php

namespace App\Models\V1IS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslandShape extends Model
{
    use HasFactory;

    protected $connection = 'mysql3';
    protected $table = 'v1_is_shape';
    protected $primaryKey  = 'id_is_shape';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
