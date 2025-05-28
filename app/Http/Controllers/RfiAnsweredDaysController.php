<?php

namespace App\Http\Controllers;

use App\Models\RfiAnsweredDays;
use Illuminate\Http\Request;

class RfiAnsweredDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'RFI Answered Days',
            'data' => RfiAnsweredDays::all()
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
    public function show(RfiAnsweredDays $rfiAnsweredDays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RfiAnsweredDays $rfiAnsweredDays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RfiAnsweredDays $rfiAnsweredDays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RfiAnsweredDays $rfiAnsweredDays)
    {
        //
    }
}
