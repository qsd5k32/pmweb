<?php

namespace App\Http\Controllers;

use App\Models\BillingTermsList;
use Illuminate\Http\Request;

class BillingTermsListController extends Controller
{
    public function index()
    {
        $billingTerms = BillingTermsList::all();
        return response()->json([
            'message' => 'Billing Terms List',
            'data' => $billingTerms
        ]);
    }
    public function show($id)
    {
        $billingTerm = BillingTermsList::findOrFail($id);
        if (!$billingTerm) {
            return response()->json(['message' => 'Commitment not found'], 404);
        }
        return response()->json([
            'message' => 'Billing Terms retrieved successfully',
            'data' => $billingTerm
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $billingTerm = BillingTermsList::create($data);
        $billingTerm = BillingTermsList::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'Billing Terms created successfully',
            'data' => $billingTerm
        ]);
    }
    public function update(Request $request, $id)
    {
        $billingTerm = BillingTermsList::findOrFail($id);
        if (!$billingTerm) {
            return response()->json(['message' => 'billing Term not found'], 404);
        }
        $billingTerm->update($request->all());
        $billingTerm->refresh();
        return response()->json([
            'message' => 'Billing Term updated successfully',
            'data' => $billingTerm
        ]); 
    }
    public function destroy($id)
    {
        $billingTerm = BillingTermsList::findOrFail($id);
        if (!$billingTerm) {
            return response()->json(['message' => 'Billing Term not found'], 404);
        }
        $billingTerm->delete();
        return response()->json(['message' => 'Billing Term deleted successfully']);
    }
}
