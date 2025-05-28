<?php

namespace App\Http\Controllers;

use App\Models\ProjectLocations;
use Illuminate\Http\Request;

class ProjectLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Project Locations',
            'data' => ProjectLocations::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ProjectId' => 'required|string|max:255',
            'Location' => 'required|string',
            'Notes' => 'nullable|string',
            'Description' => 'nullable|string',
            'SortOrder' => 'nullable|integer',
        ]);

        $projectLocation = ProjectLocations::create($validatedData);

        return response()->json([
            'message' => 'Project Location created successfully',
            'data' => $projectLocation
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectLocations $projectLocations)
    {
        $validatedData = $request->validate([
            'ProjectId' => 'required|string|max:255',
            'Location' => 'required|string',
            'Notes' => 'nullable|string',
            'Description' => 'nullable|string',
            'SortOrder' => 'nullable|integer',
        ]);

        $projectLocations->update($validatedData);

        return response()->json([
            'message' => 'Project Location updated successfully',
            'data' => $projectLocations
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectLocations $projectLocations, $id)
    {
        try {
            $projectLocations = ProjectLocations::findOrFail($id);
            $deleted = $projectLocations->delete();
            
            if (!$deleted) {
                throw new \Exception('Failed to delete Project Location');
            }
            
            return response()->json([
                'message' => 'Project Location deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Project Location',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
