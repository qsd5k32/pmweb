<?php

namespace App\Http\Controllers;

use App\Models\CountOfSubmittals;
use Illuminate\Http\Request;

class CountOfSubmittalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Submittals',
            'data' => CountOfSubmittals::all()
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
    public function show(CountOfSubmittals $countOfSubmittals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfSubmittals $countOfSubmittals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfSubmittals $countOfSubmittals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfSubmittals $countOfSubmittals)
    {
        //
    }
}
