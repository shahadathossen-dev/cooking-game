<?php

namespace App\Models\CM3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlateComb extends Model
{
    use HasFactory;

    protected $table = 'plate_comb';
    protected $primaryKey  = 'idplate_comb';
    protected $connection = 'mysql5';
    protected $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
