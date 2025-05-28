<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfiAnsweredDays extends Model
{
    use HasFactory;
    protected $table = 'AV_RfiAnsweredDays';
    protected $guarded = [];
}
