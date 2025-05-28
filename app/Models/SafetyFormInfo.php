<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyFormInfo extends Model
{
    use HasFactory;
    protected $table = 'AV_SafetyFormInfo';
    protected $guarded = [];
}
