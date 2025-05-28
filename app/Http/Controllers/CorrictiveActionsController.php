<?php

namespace App\Http\Controllers;

use App\Models\CorrictiveActions;
use Illuminate\Http\Request;

class CorrictiveActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Corrictive Actions',
            'data' => CorrictiveActions::all()
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
    public function show(CorrictiveActions $corrictiveActions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorrictiveActions $corrictiveActions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CorrictiveActions $corrictiveActions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorrictiveActions $corrictiveActions)
    {
        //
    }
}
