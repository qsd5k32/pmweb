<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategories extends Model
{
    use HasFactory;
    protected $table = 'AV_ProjectCategories';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    protected $guarded = [];
}
