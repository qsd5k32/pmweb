<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class ProjetcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Projects',
            'data' => Projects::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = Projects::create($data);

        return response()->json([
            'message' => 'Project created',
            'data' => $project
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        // $project = Projects::find($projects->Id);

        return response()->json([
            'message' => 'Project',
            'data' => $projects
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Projects::find($id);
        $project->update($request->all());

        return response()->json([
            'message' => 'Project updated',
            'data' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Projects::find($id);
        $project->delete();

        return response()->json([
            'message' => 'Project deleted',
        ]);
    }
}
