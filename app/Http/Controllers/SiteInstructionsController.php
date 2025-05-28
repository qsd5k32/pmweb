<?php

namespace App\Http\Controllers;

use App\Models\SiteInstructions;
use Illuminate\Http\Request;

class SiteInstructionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Site Instructions',
            'data' => SiteInstructions::all()
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
    public function show(SiteInstructions $siteInstructions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteInstructions $siteInstructions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteInstructions $siteInstructions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteInstructions $siteInstructions)
    {
        //
    }
}
