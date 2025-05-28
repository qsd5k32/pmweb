<?php

namespace App\Http\Controllers;

use App\Models\SafetyFormInfo;
use Illuminate\Http\Request;

class SafetyFormInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Safety Form Info',
            'data' => SafetyFormInfo::all()
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
    public function show(SafetyFormInfo $safetyFormInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafetyFormInfo $safetyFormInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafetyFormInfo $safetyFormInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafetyFormInfo $safetyFormInfo)
    {
        //
    }
}
