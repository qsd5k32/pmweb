<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategories;
use Illuminate\Http\Request;

class ProjectCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Project Categories',
            'data' => ProjectCategories::all()
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

        $projectCategory = ProjectCategories::create($validatedData);

        return response()->json([
            'message' => 'Project Category created successfully',
            'data' => $projectCategory
        ], 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectCategories $projectCategories)
    {
        $validatedData = $request->validate([
            'Category' => 'required|string|max:255',
        ]);

        $projectCategories->update($validatedData);

        return response()->json([
            'message' => 'Project Category updated successfully',
            'data' => $projectCategories
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectCategories $projectCategories, $id)
    {
        try {
            $projectCategories = ProjectCategories::findOrFail($id);
            $deleted = $projectCategories->delete();
            
            if (!$deleted) {
                throw new \Exception('Failed to delete Project category');
            }

            return response()->json([
                'message' => 'Project Category deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Project Category',
                'error' => $e->getMessage()
            ], 500);
        }
        
    }
}
