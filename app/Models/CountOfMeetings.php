<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountOfMeetings extends Model
{
    use HasFactory;

    protected $table = 'AV_CountOfMeetings';
    protected $guarded = [];
}
