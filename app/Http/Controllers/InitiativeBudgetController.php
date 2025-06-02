<?php

namespace App\Http\Controllers;

use App\Models\InitiativeBudget;
use Illuminate\Http\Request;

class InitiativeBudgetController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Initiative Budgets',
            'data' => InitiativeBudget::all()
        ]);
    }
    public function show(InitiativeBudget $initiativeBudget, $id)
    {
        try {
            $initiativeBudget = InitiativeBudget::findOrFail($id);
            return response()->json([
                'message' => 'Initiative Budget retrieved successfully',
                'data' => $initiativeBudget
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error retrieving Initiative Budget',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function store(Request $request)
    {

        $data = $request->all();
        $initiativeBudget = InitiativeBudget::create($data);

        return response()->json([
            'message' => 'Initiative Budget created successfully',
            'data' => $initiativeBudget
        ], 201);
    }
    public function update(Request $request, InitiativeBudget $initiativeBudget)
    {
        $data = $request->all();
        $initiativeBudget->update($data);

        return response()->json([
            'message' => 'Initiative Budget updated successfully',
            'data' => $initiativeBudget
        ]);
    }
    public function destroy(InitiativeBudget $initiativeBudget, $id)
    {
        try {
            $initiativeBudget = InitiativeBudget::findOrFail($id);
            $deleted = $initiativeBudget->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Initiative Budget');
            }

            return response()->json([
                'message' => 'Initiative Budget deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Initiative Budget',
                'error' => $e->getMessage()
            ], 500);
        }
    }

}
