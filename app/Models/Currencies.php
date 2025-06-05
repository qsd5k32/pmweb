<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currencies extends Model
{
    use HasFactory;
    protected $table = 'AV_Currencies';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    protected $guarded = [];
}
