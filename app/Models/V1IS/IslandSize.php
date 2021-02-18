<?php

namespace App\Models\V1IS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslandSize extends Model
{
    use HasFactory;

    protected $connection = 'mysql3';
    protected $table = 'v1_is_size';
    protected $primaryKey  = 'id_is_size';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
