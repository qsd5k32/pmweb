<?php

namespace App\Http\Controllers;

use App\Models\CountOfAccidents;
use Illuminate\Http\Request;

class CountOfAccidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Accidents',
            'data' => CountOfAccidents::all()
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
    public function show(CountOfAccidents $countOfAccidents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfAccidents $countOfAccidents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfAccidents $countOfAccidents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfAccidents $countOfAccidents)
    {
        //
    }
}
