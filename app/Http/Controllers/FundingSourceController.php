<?php

namespace App\Http\Controllers;

use App\Models\FundingSource;
use Illuminate\Http\Request;

class FundingSourceController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Funding Sources',
            'data' => FundingSource::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $FundingSource = FundingSource::create($data);
         // find the last created 
        $latestCreated = FundingSource::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'Funding Source created successfully',
            'data' => $latestCreated
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $FundingSource = FundingSource::findOrFail($id);
        $FundingSource->update($request->all());
        return response()->json([
            'message' => 'Funding Source updated successfully',
            'data' => $FundingSource
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FundingSource $FundingSource, $id)
    {
        try {
            $FundingSource = FundingSource::findOrFail($id);
            $deleted = $FundingSource->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Funding Source');
            }

            return response()->json([
                'message' => 'Funding Source deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Funding Source',
                'error' => $e->getMessage()
            ]);
        }
    }
}
