<?php

namespace App\Http\Controllers;

use App\Models\PaymentsSumForProjects;
use Illuminate\Http\Request;

class PaymentsSumForProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Payments Sum For Projects',
            'data' => PaymentsSumForProjects::all()
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
    public function show(PaymentsSumForProjects $paymentsSumForProjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentsSumForProjects $paymentsSumForProjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaymentsSumForProjects $paymentsSumForProjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentsSumForProjects $paymentsSumForProjects)
    {
        //
    }
}
