<?php

namespace App\Http\Controllers;

use App\Models\CountOfNCR;
use Illuminate\Http\Request;

class CountOfNCRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of NCR',
            'data' => CountOfNCR::all()
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
    public function show(CountOfNCR $countOfNCR)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfNCR $countOfNCR)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfNCR $countOfNCR)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfNCR $countOfNCR)
    {
        //
    }
}
