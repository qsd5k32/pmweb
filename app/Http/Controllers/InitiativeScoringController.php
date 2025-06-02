<?php

namespace App\Http\Controllers;

use App\Models\InitiativeScoring;
use Illuminate\Http\Request;

class InitiativeScoringController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Initiative Scoring',
            'data' => InitiativeScoring::all()
        ]);
    }
    public function show(InitiativeScoring $InitiativeScoring, $id)
    {
        try {
            $InitiativeScoring = InitiativeScoring::findOrFail($id);
            return response()->json([
                'message' => 'Initiative scoring retrieved successfully',
                'data' => $InitiativeScoring
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error retrieving Initiative scoring',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $InitiativeScoring = InitiativeScoring::create($data);

        return response()->json([
            'message' => 'Initiative scoring created successfully',
            'data' => $InitiativeScoring
        ], 201);
    }
    public function update(Request $request, InitiativeScoring $InitiativeScoring)
    {
        $data = $request->all();
        $InitiativeScoring->update($data);

        return response()->json([
            'message' => 'Initiative scoring updated successfully',
            'data' => $InitiativeScoring
        ]);
    }
    public function destroy(InitiativeScoring $InitiativeScoring, $id)
    {
        try {
            $InitiativeScoring = InitiativeScoring::findOrFail($id);
            $deleted = $InitiativeScoring->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Initiative scoring');
            }

            return response()->json([
                'message' => 'Initiative scoring deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Initiative scoring',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
