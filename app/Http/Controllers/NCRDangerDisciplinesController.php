<?php

namespace App\Http\Controllers;

use App\Models\NCRDangerDisciplines;
use Illuminate\Http\Request;

class NCRDangerDisciplinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'NCR Danger & Disciplines',
            'data' => NCRDangerDisciplines::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NCRDangerDisciplines $nCRDangerDisciplines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NCRDangerDisciplines $nCRDangerDisciplines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NCRDangerDisciplines $nCRDangerDisciplines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NCRDangerDisciplines $nCRDangerDisciplines)
    {
        //
    }
}
