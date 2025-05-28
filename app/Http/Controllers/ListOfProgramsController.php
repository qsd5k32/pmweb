<?php

namespace App\Http\Controllers;

use App\Models\ListOfPrograms;
use Illuminate\Http\Request;

class ListOfProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'List of Programs',
            'data' => ListOfPrograms::all()
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
    public function show(ListOfPrograms $listOfPrograms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ListOfPrograms $listOfPrograms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ListOfPrograms $listOfPrograms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ListOfPrograms $listOfPrograms)
    {
        //
    }
}
