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
        $companiesList = CompaniesList::with('companyType')->get();
        return response()->json([
            'message' => 'Companies List',
            'data' => $companiesList
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
        $company = CompaniesList::create($request->all());
        return response()->json([
            'message' => 'Company created successfully',
            'data' => $company->load('companyType')
        ]);
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
    public function update(Request $request, $id)
    {
        $companiesList = CompaniesList::findOrFail($id);
        if (!$companiesList) {
            return response()->json(['message' => 'Company not found'], 404);
        }
        $companiesList->update($request->all());
        return response()->json([
            'message' => 'Company updated successfully',
            'data' => $companiesList->load('companyType')
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $companiesList = CompaniesList::findOrFail($id);
        if (!$companiesList) {
            return response()->json(['message' => 'Company not found'], 404);
        }
        $companiesList->delete();
        return response()->json(['message' => 'Company deleted successfully']);
    }
}
