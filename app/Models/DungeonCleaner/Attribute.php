<?php

namespace App\Models\DungeonCleaner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attr_settings';
    protected $primaryKey  = 'idattr_settings';
    protected $connection = 'mysql6';
    protected $guarded = [];
    public $timestamps = false;
}
