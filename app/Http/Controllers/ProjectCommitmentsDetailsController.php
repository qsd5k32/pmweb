<?php

namespace App\Http\Controllers;

use App\Models\ProjectCommitmentsDetails;
use Illuminate\Http\Request;

class ProjectCommitmentsDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Project Commitments Details',
            'data' => ProjectCommitmentsDetails::all()
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectCommitmentsDetails $projectCommitmentsDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectCommitmentsDetails $projectCommitmentsDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectCommitmentsDetails $projectCommitmentsDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectCommitmentsDetails $projectCommitmentsDetails)
    {
        //
    }
}
