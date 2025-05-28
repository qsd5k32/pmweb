<?php

namespace App\Http\Controllers;

use App\Models\ProgressInvoiceDetails;
use Illuminate\Http\Request;

class ProgressInvoiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Progress Invoice Details',
            'data' => ProgressInvoiceDetails::all()
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
    public function show(ProgressInvoiceDetails $progressInvoiceDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgressInvoiceDetails $progressInvoiceDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgressInvoiceDetails $progressInvoiceDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgressInvoiceDetails $progressInvoiceDetails)
    {
        //
    }
}
