<?php

namespace App\Http\Controllers;

use App\Models\PB;
use Illuminate\Http\Request;

class PBsController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'PBs',
            'data' => PB::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $PB = PB::create($data);
         // find the last created 
        $latestCreated = PB::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'PB created successfully',
            'data' => $latestCreated
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $PB = PB::findOrFail($id);
        $PB->update($request->all());
        return response()->json([
            'message' => 'PB updated successfully',
            'data' => $PB
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PB $PB, $id)
    {
        try {
            $Pb = PB::findOrFail($id);
            $deleted = $Pb->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete PB');
            }

            return response()->json([
                'message' => 'PB deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting PB',
                'error' => $e->getMessage()
            ]);
        }
    }
}
