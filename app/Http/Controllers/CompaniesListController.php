<?php

namespace App\Http\Controllers;

use App\Models\CompaniesList;
use Illuminate\Http\Request;

class CompaniesListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Companies List',
            'data' => CompaniesList::all()
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
    public function show(CompaniesList $companiesList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompaniesList $companiesList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompaniesList $companiesList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompaniesList $companiesList)
    {
        //
    }
}
