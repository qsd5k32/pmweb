<?php

namespace App\Http\Controllers;

use App\Models\InspectionDetails;
use Illuminate\Http\Request;

class InspectionDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Inspection Details',
            'data' => InspectionDetails::all()
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
    public function show(InspectionDetails $inspectionDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InspectionDetails $inspectionDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InspectionDetails $inspectionDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InspectionDetails $inspectionDetails)
    {
        //
    }
}
