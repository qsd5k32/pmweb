<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsListController extends Controller
{
    public function index()
    {
        $programs = \App\Models\ProgramsList::all();
        return response()->json([
            'message' => 'Programs List',
            'data' => $programs
        ]);
    }
}
