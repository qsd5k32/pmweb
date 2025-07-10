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
    // project manager
    public function projectManager()
    {
        return $this->belongsTo(ProjectManager::class, 'ProjectManagerId', 'Id');
    }
    // sponsor
    public function sponsor()
    {
        return $this->belongsTo(Sponsor::class, 'SponsorId', 'Id');
    }
    // location
    public function location()
    {
        return $this->belongsTo(Location::class, 'AssetLocationId', 'Id');
    }
    // Pbs
    public function pbs()
    {
        return $this->belongsTo(PB::class, 'PBSId', 'Id');
    }
    // relation to programs list
    public function program()
    {
        return $this->belongsTo(ProgramsList::class, 'ProgramId', 'Id');
    }
    // scopes
    public function scopes()
    {
        return $this->hasMany(ProjectScopes::class, 'ProjectId', 'ProjectId');
    }
    // funding source
    public function fundingSource()
    {
        return $this->belongsTo(FundingSource::class, 'FundingSourceId', 'Id');
    }

}