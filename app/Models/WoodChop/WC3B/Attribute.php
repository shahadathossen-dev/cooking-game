<?php

namespace App\Models\WoodChop\WC3B;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $table = '3B_settings';
    protected $primaryKey  = 'id_settings';
    protected $connection = 'mysql2';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
