<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramsList extends Model
{
    use HasFactory;
    protected $table = 'AV_ProgramsList';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];
}
