<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitments extends Model
{
    use HasFactory;
    protected $table = 'AV_commitments';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(CompaniesList::class, 'CompanyId', 'Id');
    }
    public function project()
    {
        return $this->belongsTo(Projects::class, 'ProjectId', 'Id');
    }

    public function type()
    {
        return $this->belongsTo(CommitmentTypes::class, 'TypeId', 'Id');
    }

    public function docStatus()
    {
        return $this->belongsTo(DocStatus::class, 'DocStatusId', 'Id');
    }

    public function currency()
    {
        return $this->belongsTo(Currencies::class, 'CurrencyId', 'Id');
    }

    public function billingTerm()
    {
        return $this->belongsTo(BillingTermsList::class, 'BillingTermId', 'Id');
    }

    // public function estimate()
    // {
    //     return $this->belongsTo(Estimate::class, 'EstimateId');
    // }

    // public function initiative()
    // {
    //     return $this->belongsTo(initiative::class, 'InitiativeId');
    // }

    public function category()
    {
        return $this->belongsTo(CommitmentCategories::class, 'CategoryId', 'Id');
    }
}
