<?php

namespace App\Http\Controllers;

use App\Models\CompanyTypes;
use Illuminate\Http\Request;

class CompanyTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CompanyTypes::all();
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
        $companyTypes = new CompanyTypes();
        $companyTypes->Type = $request->input('Type');
        $companyTypes->Inactive = $request->input('Inactive');
        $companyTypes->save();

        return response()->json([
            'message' => 'Company Type created successfully',
            'data' => $companyTypes
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyTypes $companyTypes)
    {
        return $companyTypes;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyTypes $companyTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyTypes $companyTypes)
    {
        $companyTypes->Type = $request->input('Type', $companyTypes->Type);
        $companyTypes->Inactive = $request->input('Inactive', $companyTypes->Inactive);
        $companyTypes->save();

        return response()->json([
            'message' => 'Company Type updated successfully',
            'data' => $companyTypes
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyTypes $companyTypes)
    {
        try {
            $deleted = $companyTypes->delete();
            
            if (!$deleted) {
                throw new \Exception('Failed to delete company type');
            }
            
            return response()->json([
                'message' => 'Company Type deleted successfully',
                'data' => CompanyTypes::all()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Company Type',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
