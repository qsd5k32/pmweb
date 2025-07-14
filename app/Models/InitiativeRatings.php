<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitiativeRatings extends Model
{
    use HasFactory;
    protected $table = 'AV_InitiativeRatings';
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $keyType = 'string';
    protected $guarded = [];

    // users relation
    public function user()
    {
        return $this->belongsTo(User::class, 'UserId', 'Id');
    }
}
