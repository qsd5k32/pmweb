<?php

namespace App\Http\Controllers;

use App\Models\InitiativeBudget;
use Illuminate\Http\Request;

class InitiativeBudgetController extends Controller
{
    // public function index()
    // {
    //     $budget = InitiativeBudget::with(['project', 'status', 'type', 'category', 'priority', 'currency', 'projectManager', 'sponsor', 'location', 'pbs', 'program', 'scopes', 'fundingSource'])->get();
    //     return response()->json([
    //         'message' => 'Initiative Budgets',
    //         'data' => $budget
    //     ]);
    // }

    public function index(Request $request)
    {
        $query = InitiativeBudget::with([
            'project', 'status', 'type', 'category', 'priority', 'currency',
            'projectManager', 'sponsor', 'location', 'pbs', 'program', 'scopes', 'fundingSource', 'workflowTemplate', 'createdBy'
        ]);

        if ($request->has('priority')) {
            $query->where('PriorityId', $request->input('priority'));
        }
        if ($request->has('type')) {
            $query->where('TypeId', $request->input('type'));
        }
        if ($request->has('program')) {
            $query->where('ProgramId', $request->input('program'));
        }

        $budget = $query->get();

        return response()->json([
            'message' => 'Initiative Budgets',
            'data' => $budget
        ]);
    }
    public function show($id)
    {
        try {
            $initiativeBudget = InitiativeBudget::findOrFail($id);
            $initiativeBudget->load(['project', 'status', 'type', 'category', 'priority', 'currency', 'projectManager', 'sponsor', 'location', 'pbs', 'program', 'scopes', 'fundingSource', 'workflowTemplate', 'createdBy']);
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

        $latestCreated->load(['project', 'status', 'type', 'category', 'priority', 'currency', 'projectManager', 'sponsor', 'location', 'pbs', 'program', 'scopes', 'fundingSource', 'workflowTemplate', 'createdBy']);

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

            $initiativeBudget->load(['project', 'status', 'type', 'category', 'priority', 'currency', 'projectManager', 'sponsor', 'location', 'pbs','program', 'scopes', 'workflowTemplate', 'createdBy']);

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
