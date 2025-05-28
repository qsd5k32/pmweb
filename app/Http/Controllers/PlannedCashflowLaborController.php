<?php

namespace App\Http\Controllers;

use App\Models\PlannedCashflowLabor;
use Illuminate\Http\Request;

class PlannedCashflowLaborController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Planned Cashflow & Labor',
            'data' => PlannedCashflowLabor::all()
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
    public function show(PlannedCashflowLabor $plannedCashflowLabor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlannedCashflowLabor $plannedCashflowLabor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlannedCashflowLabor $plannedCashflowLabor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlannedCashflowLabor $plannedCashflowLabor)
    {
        //
    }
}
