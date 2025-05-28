<?php

namespace App\Http\Controllers;

use App\Models\CommitmentCategories;
use Illuminate\Http\Request;

class CommitmentCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Commitment Categories',
            'data' => CommitmentCategories::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Category' => 'required|string|max:255',
        ]);
        $commitmentCategory = CommitmentCategories::create($validatedData);
        return response()->json([
            'message' => 'Commitment Category created successfully',
            'data' => $commitmentCategory
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CommitmentCategories $commitmentCategories)
    {
        $validatedData = $request->validate([
            'Category' => 'required|string|max:255',
        ]);
        $commitmentCategories->update($validatedData);
        return response()->json([
            'message' => 'Commitment Category updated successfully',
            'data' => $commitmentCategories
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommitmentCategories $commitmentCategories, $id)
    {
        try {
            $commitmentCategories = CommitmentCategories::findOrFail($id);
            $deleted = $commitmentCategories->delete();
            
            if (!$deleted) {
                throw new \Exception('Failed to delete Commitment category');
            }
            
            return response()->json([
                'message' => 'Commitment Category deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Commitment Category',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
