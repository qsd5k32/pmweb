<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectStatuses extends Model
{
    use HasFactory;
    protected $table = 'AV_ProjectStatuses';
    protected $guarded = [];
}
