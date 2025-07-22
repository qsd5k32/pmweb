<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTypes extends Model
{
    use HasFactory;
    protected $table = 'AV_CompanyTypes';
    public $timestamps = false;
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    protected $guarded = [];
}
