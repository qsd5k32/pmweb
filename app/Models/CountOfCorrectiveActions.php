<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountOfCorrectiveActions extends Model
{
    use HasFactory;
    protected $table = 'AV_CountOfCorrectiveActions';
    protected $guarded = [];
}
