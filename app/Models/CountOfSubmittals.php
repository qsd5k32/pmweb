<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountOfSubmittals extends Model
{
    use HasFactory;
    protected $table = 'AV_CountOfSubmittals';
    protected $guarded = [];
}
