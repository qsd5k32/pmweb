<?php

namespace App\Http\Controllers;

use App\Models\InitiativeBudget;
use Illuminate\Http\Request;

class InitiativeBudgetController extends Controller
{
    public function index()
    {
        $budget = InitiativeBudget::with(['project', 'status', 'type', 'category', 'priority', 'currency'])->get();
        return response()->json([
            'message' => 'Initiative Budgets',
            'data' => $budget
        ]);
    }
    public function show($id)
    {
        try {
            $initiativeBudget = InitiativeBudget::findOrFail($id);
            $initiativeBudget->load(['project', 'status', 'type', 'category', 'priority', 'currency']);
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

        // find the last created InitiativeBudget
        $latestCreated = InitiativeBudget::orderBy('Id', 'desc')->first();

        $latestCreated->load(['project', 'status', 'type', 'category', 'priority', 'currency']);

        return response()->json([
            'message' => 'Initiative Budget created successfully',
            'data' => $latestCreated
        ], 201);
    }
    public function update(Request $request, $id)
    {
        try {
            $initiativeBudget = InitiativeBudget::findOrFail($id);
            $data = $request->all();
            $initiativeBudget->update($data);

            $initiativeBudget->load(['project', 'status', 'type', 'category', 'priority', 'currency']);

            return response()->json([
                'message' => 'Initiative Budget updated successfully',
                'data' => $initiativeBudget
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error retrieving Initiative Budget',
                'error' => $e->getMessage()
            ], 500);
        }
        
    }
    public function destroy(Request $request)
    {
        try {
            $ids = $request->input('ids');
            
            if (!is_array($ids) || empty($ids)) {
                throw new \Exception('Please provide an array of IDs to delete');
            }

            $deleted = InitiativeBudget::whereIn('id', $ids)->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete Initiative Budgets');
            }

            return response()->json([
                'message' => 'Initiative Budgets deleted successfully',
                'count' => $deleted
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting Initiative Budgets',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    // public function destroy(InitiativeBudget $initiativeBudget, $id)
    // {
    //     try {
    //         $initiativeBudget = InitiativeBudget::findOrFail($id);
    //         $deleted = $initiativeBudget->delete();

    //         if (!$deleted) {
    //             throw new \Exception('Failed to delete Initiative Budget');
    //         }

    //         return response()->json([
    //             'message' => 'Initiative Budget deleted successfully'
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'message' => 'Error deleting Initiative Budget',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }

}
