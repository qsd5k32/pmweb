<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsSumForProjects extends Model
{
    use HasFactory;
    protected $table = 'AV_PaymentsSumForProjects';
    protected $guarded = [];
}
