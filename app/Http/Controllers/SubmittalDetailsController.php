<?php

namespace App\Http\Controllers;

use App\Models\SubmittalDetails;
use Illuminate\Http\Request;

class SubmittalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Submittal Details',
            'data' => SubmittalDetails::all()
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
    public function show(SubmittalDetails $submittalDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubmittalDetails $submittalDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubmittalDetails $submittalDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubmittalDetails $submittalDetails)
    {
        //
    }
}
