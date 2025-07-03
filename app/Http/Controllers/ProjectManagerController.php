<?php

namespace App\Http\Controllers;

use App\Models\ProjectManager;
use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
     public function index()
    {
        return response()->json([
            'message' => 'Locations',
            'data' => ProjectManager::all()
        ]);
    }
}
