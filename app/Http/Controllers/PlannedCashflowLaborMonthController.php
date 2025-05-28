<?php

namespace App\Http\Controllers;

use App\Models\PlannedCashflowLaborMonth;
use Illuminate\Http\Request;

class PlannedCashflowLaborMonthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Planned Cashflow & Labor Month',
            'data' => PlannedCashflowLaborMonth::all()
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
    public function show(PlannedCashflowLaborMonth $plannedCashflowLaborMonth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlannedCashflowLaborMonth $plannedCashflowLaborMonth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlannedCashflowLaborMonth $plannedCashflowLaborMonth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlannedCashflowLaborMonth $plannedCashflowLaborMonth)
    {
        //
    }
}
