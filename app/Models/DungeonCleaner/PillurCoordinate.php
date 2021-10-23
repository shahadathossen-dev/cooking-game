<?php

namespace App\Models\DungeonCleaner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PillurCoordinate extends Model
{
    use HasFactory;

    protected $table = 'pillur_coordinates';
    protected $primaryKey  = 'id_pillur_coordinates';
    protected $connection = 'mysql6';
    protected $guarded = [];
    public $timestamps = false;
}
