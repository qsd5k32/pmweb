<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Locations',
            'data' => Sponsor::all()
        ]);
    }
}
