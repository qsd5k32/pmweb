<?php

namespace App\Http\Controllers;

use App\Models\AllPrograms;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Programs',
            'data' => AllPrograms::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $program = AllPrograms::create($data);
         // find the last created 
        $latestCreated = AllPrograms::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'Program created successfully',
            'data' => $latestCreated
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program = AllPrograms::findOrFail($id);
        $program->update($request->all());
        return response()->json([
            'message' => 'Program updated successfully',
            'data' => $program
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AllPrograms $AllPrograms, $id)
    {
        try {
            $program = AllPrograms::findOrFail($id);
            $deleted = $program->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Program');
            }

            return response()->json([
                'message' => 'Program deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Program',
                'error' => $e->getMessage()
            ]);
        }
    }
}
