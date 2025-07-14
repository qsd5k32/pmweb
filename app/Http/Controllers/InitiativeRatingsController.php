<?php

namespace App\Http\Controllers;

use App\Models\InitiativeRatings;
use Illuminate\Http\Request;

class InitiativeRatingsController extends Controller
{
    // public function index()
    // {
    //     $InitiativeRatings = InitiativeRatings::with('User')->get();
    //     return response()->json([
    //         'message' => 'Initiative Ratings',
    //         'data' => $InitiativeRatings
    //     ]);
    // }
    public function index(Request $request)
    {
        $query = InitiativeRatings::with('User');
        
        // Filter by initiativeBudgetId if provided
        if ($request->has('InitiativeBudgetId') && $request->InitiativeBudgetId) {
            $query->where('InitiativeBudgetId', $request->InitiativeBudgetId);
        }
        
        $InitiativeRatings = $query->get();
        
        return response()->json([
            'message' => 'Initiative Ratings',
            'data' => $InitiativeRatings
        ]);
    }
    public function show($id)
    {
        try {
            $InitiativeRatings = InitiativeRatings::findOrFail($id);
            return response()->json([
                'message' => 'Initiative Rating retrieved successfully',
                'data' => $InitiativeRatings->load('User')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error retrieving Initiative Rating',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $InitiativeRatings = InitiativeRatings::create($data);
        $InitiativeRatings->load('User');

        return response()->json([
            'message' => 'Initiative Rating created successfully',
            'data' => $InitiativeRatings
        ], 201);
    }
    public function update(Request $request, $id)
    {
        try {
            $InitiativeRatings = InitiativeRatings::findOrFail($id);
            $data = $request->all();
            // return response()->json([
            //     'all_data' => $request->all(),
            //     'input_data' => $request->input(),
            //     'json_data' => $request->json()->all(),
            //     'content_type' => $request->header('Content-Type'),
            //     'method' => $request->method()
            // ]);
            $InitiativeRatings->update($data);
            $InitiativeRatings->load('User');

            return response()->json([
                'message' => 'Initiative Rating updated successfully',
                'data' => $InitiativeRatings
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error updating Initiative Rating',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function destroy(InitiativeRatings $InitiativeRatings, $id)
    {
        try {
            $InitiativeRatings = InitiativeRatings::findOrFail($id);
            $deleted = $InitiativeRatings->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Initiative Rating');
            }

            return response()->json([
                'message' => 'Initiative Rating deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Initiative Rating',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
