<?php

namespace App\Http\Controllers;

use App\Models\RFIsCountOf;
use Illuminate\Http\Request;

class RFIsCountOfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'RFIs Count Of',
            'data' => RFIsCountOf::all()
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
    public function show(RFIsCountOf $rFIsCountOf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RFIsCountOf $rFIsCountOf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RFIsCountOf $rFIsCountOf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RFIsCountOf $rFIsCountOf)
    {
        //
    }
}
