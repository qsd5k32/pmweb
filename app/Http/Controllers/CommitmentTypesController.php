<?php

namespace App\Http\Controllers;

use App\Models\CommitmentTypes;
use Illuminate\Http\Request;

class CommitmentTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Commitment Types',
            'data' => CommitmentTypes::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'CommitmentType' => 'required|string|max:255',
        ]);
        $commitmentType = CommitmentTypes::create($validatedData);
        return response()->json([
            'message' => 'Commitment Type created successfully',
            'data' => $commitmentType
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommitmentTypes $commitmentTypes)
    {
        $validatedData = $request->validate([
            'CommitmentType' => 'required|string|max:255',
        ]);
        $commitmentTypes->update($validatedData);
        return response()->json([
            'message' => 'Commitment Type updated successfully',
            'data' => $commitmentTypes
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommitmentTypes $commitmentTypes, $id)
    {
        try {
            $commitmentTypes = CommitmentTypes::findOrFail($id);
            $deleted = $commitmentTypes->delete();
            
            if (!$deleted) {
                throw new \Exception('Failed to delete Commitment type');
            }
            
            return response()->json([
                'message' => 'Commitment Type deleted successfully',
                // 'data' => CommitmentTypes::all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Commitment Type',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
