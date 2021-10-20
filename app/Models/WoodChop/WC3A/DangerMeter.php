<?php

namespace App\Models\WoodChop\WC3A;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DangerMeter extends Model
{
    use HasFactory;

    protected $table = '3A_danger_meter';
    protected $primaryKey  = 'id_danger_meter';
    protected $connection = 'mysql2';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
