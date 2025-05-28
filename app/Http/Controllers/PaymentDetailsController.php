<?php

namespace App\Http\Controllers;

use App\Models\PaymentDetails;
use Illuminate\Http\Request;

class PaymentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Payment Details',
            'data' => PaymentDetails::all()
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
    public function show(PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentDetails $paymentDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentDetails $paymentDetails)
    {
        //
    }
}
