<?php

namespace App\Http\Controllers;

use App\Models\ProjectStatuses;
use Illuminate\Http\Request;

class ProjectStatusesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Project Statuses',
            'data' => ProjectStatuses::all()
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
        ProjectStatuses::create($request->all());
        return response()->json([
            'message' => 'Project Statuses created successfully',
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectStatuses $projectStatuses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectStatuses $projectStatuses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectStatuses $projectStatuses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectStatuses $projectStatuses)
    {
        //
    }
}
