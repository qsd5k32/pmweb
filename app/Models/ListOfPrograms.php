<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfPrograms extends Model
{
    use HasFactory;
    protected $table = 'AV_ListOfPrograms';
    protected $guarded = [];
}
