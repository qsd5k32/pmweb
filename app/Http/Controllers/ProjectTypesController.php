<?php

namespace App\Http\Controllers;

use App\Models\ProjectTypes;
use Illuminate\Http\Request;

class ProjectTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Project Types',
            'data' => ProjectTypes::all()
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
        $projectType = new ProjectTypes();
        $projectType->Type = $request->Type;
        $projectType->Inactive = $request->Inactive ?? false;
        
        $projectType->save();

        return response()->json([
            'message' => 'Project Type created successfully',
            'data' => $projectType
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectTypes $projectTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectTypes $projectTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectTypes $projectTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectTypes $projectTypes, $id)
    {
        try {
            // $deleted = $projectTypes->delete();
               $projectTypes = ProjectTypes::find($id);
            $projectTypes->delete();
            
            if (!$projectTypes) {
                throw new \Exception('Failed to delete company type');
            }
            
            return response()->json([
                'message' => 'Company Type deleted successfully',
                'data' => ProjectTypes::all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Company Type',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
