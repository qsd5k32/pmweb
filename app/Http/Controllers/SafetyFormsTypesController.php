<?php

namespace App\Http\Controllers;

use App\Models\SafetyFormsTypes;
use Illuminate\Http\Request;

class SafetyFormsTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Safety Forms Types',
            'data' => SafetyFormsTypes::all()
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
    public function show(SafetyFormsTypes $safetyFormsTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafetyFormsTypes $safetyFormsTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafetyFormsTypes $safetyFormsTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafetyFormsTypes $safetyFormsTypes)
    {
        //
    }
}
