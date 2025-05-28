<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountOfAccidents extends Model
{
    use HasFactory;
    protected $table = 'AV_CountOfAccidents';
    protected $guarded = [];
}
