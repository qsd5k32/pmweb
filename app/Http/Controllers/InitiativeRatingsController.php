<?php

namespace App\Http\Controllers;

use App\Models\InitiativeRatings;
use Illuminate\Http\Request;

class InitiativeRatingsController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Initiative Ratings',
            'data' => InitiativeRatings::all()
        ]);
    }
    public function show(InitiativeRatings $InitiativeRatings, $id)
    {
        try {
            $InitiativeRatings = InitiativeRatings::findOrFail($id);
            return response()->json([
                'message' => 'Initiative Rating retrieved successfully',
                'data' => $InitiativeRatings
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

        return response()->json([
            'message' => 'Initiative Rating created successfully',
            'data' => $InitiativeRatings
        ], 201);
    }
    public function update(Request $request, InitiativeRatings $InitiativeRatings)
    {
        $data = $request->all();
        $InitiativeRatings->update($data);

        return response()->json([
            'message' => 'Initiative Rating updated successfully',
            'data' => $InitiativeRatings
        ]);
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
