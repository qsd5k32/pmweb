<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Locations',
            'data' => Location::all()
        ]);
    }
}
