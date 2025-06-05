<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitiativeBudget extends Model
{
    use HasFactory;
    protected $table = 'AV_InitiativeBudget';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];

    // relation to project
    public function project()
    {
        return $this->belongsTo(Projects::class, 'ProjectId', 'Id');
    }
    // currency
    public function currency()
    {
        return $this->belongsTo(Currencies::class, 'CurrencyId', 'Id');
    }
    public function status()
    {
        return $this->belongsTo(ProjectStatuses::class, 'StatusId', 'Id');
    }
    public function type()
    {
        return $this->belongsTo(ProjectTypes::class, 'TypeId', 'Id');
    }
    // category
    public function category()
    {
        return $this->belongsTo(ProjectCategories::class, 'CategoryId', 'Id');
    }
    // priority
    public function priority()
    {
        return $this->belongsTo(Priorities::class, 'PriorityId', 'Id');
    }

}