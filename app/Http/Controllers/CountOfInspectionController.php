<?php

namespace App\Http\Controllers;

use App\Models\CountOfInspection;
use Illuminate\Http\Request;

class CountOfInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Inspection',
            'data' => CountOfInspection::all()
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
    public function show(CountOfInspection $countOfInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfInspection $countOfInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfInspection $countOfInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfInspection $countOfInspection)
    {
        //
    }
}
