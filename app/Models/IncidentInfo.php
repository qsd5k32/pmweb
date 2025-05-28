<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentInfo extends Model
{
    use HasFactory;
    protected $table = 'AV_IncidentInfo';
    protected $guarded = [];
}
