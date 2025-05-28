<?php

namespace App\Http\Controllers;

use App\Models\CountOfCorrectiveActions;
use Illuminate\Http\Request;

class CountOfCorrectiveActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Corrective Actions',
            'data' => CountOfCorrectiveActions::all()
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
    public function show(CountOfCorrectiveActions $countOfCorrectiveActions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfCorrectiveActions $countOfCorrectiveActions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfCorrectiveActions $countOfCorrectiveActions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfCorrectiveActions $countOfCorrectiveActions)
    {
        //
    }
}
