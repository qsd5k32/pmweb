<?php

namespace App\Http\Controllers;

use App\Models\SumOfProgressInvoice;
use Illuminate\Http\Request;

class SumOfProgressInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Sum of Progress Invoices',
            'data' => SumOfProgressInvoice::all()
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
    public function show(SumOfProgressInvoice $sumOfProgressInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SumOfProgressInvoice $sumOfProgressInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SumOfProgressInvoice $sumOfProgressInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SumOfProgressInvoice $sumOfProgressInvoice)
    {
        //
    }
}
