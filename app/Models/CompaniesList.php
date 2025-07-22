<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesList extends Model
{
    use HasFactory;
    protected $table = 'AV_CompaniesList';
    protected $primaryKey = 'Id';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $guarded = [];

    // relation with Company type
    public function companyType()
    {
        return $this->belongsTo(CompanyTypes::class, 'CompanyTypeId', 'Id');
    }
}
