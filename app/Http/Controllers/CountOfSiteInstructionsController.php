<?php

namespace App\Http\Controllers;

use App\Models\CountOfSiteInstructions;
use Illuminate\Http\Request;

class CountOfSiteInstructionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Site Instructions',
            'data' => CountOfSiteInstructions::all()
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
    public function show(CountOfSiteInstructions $countOfSiteInstructions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfSiteInstructions $countOfSiteInstructions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfSiteInstructions $countOfSiteInstructions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfSiteInstructions $countOfSiteInstructions)
    {
        //
    }
}
