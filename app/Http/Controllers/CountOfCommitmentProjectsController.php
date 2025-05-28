<?php

namespace App\Http\Controllers;

use App\Models\CountOfCommitmentProjects;
use Illuminate\Http\Request;

class CountOfCommitmentProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Commitment Projects',
            'data' => CountOfCommitmentProjects::all()
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
    public function show(CountOfCommitmentProjects $countOfCommitmentProjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfCommitmentProjects $countOfCommitmentProjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfCommitmentProjects $countOfCommitmentProjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfCommitmentProjects $countOfCommitmentProjects)
    {
        //
    }
}
