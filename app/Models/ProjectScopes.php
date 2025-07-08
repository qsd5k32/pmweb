<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectScopes extends Model
{
    use HasFactory;
    protected $table = 'AV_ProjectScopes';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];
}
