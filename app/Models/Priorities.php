<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priorities extends Model
{
    use HasFactory;

    protected $table = 'AV_Priorities';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    protected $guarded = [];
}
