<?php

namespace App\Models\DungeonCleaner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TileSpawn extends Model
{
    use HasFactory;

    protected $table = 'tile_spawn';
    protected $primaryKey  = 'id_tile_spawn';
    protected $connection = 'mysql6';
    protected $guarded = [];
    public $timestamps = false;
}
