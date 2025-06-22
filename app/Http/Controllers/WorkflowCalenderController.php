<?php

namespace App\Http\Controllers;

use App\Models\WorkflowCalender;
use Illuminate\Http\Request;

class WorkflowCalenderController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Workflow Calenders',
            'data' => WorkflowCalender::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $WorkflowCalender = WorkflowCalender::create($data);
         // find the last created 
        $latestCreated = WorkflowCalender::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'Workflow Calender created successfully',
            'data' => $latestCreated
        ], 201);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $WorkflowCalender = WorkflowCalender::findOrFail($id);
        $WorkflowCalender->update($request->all());
        return response()->json([
            'message' => 'Workflow Calender updated successfully',
            'data' => $WorkflowCalender
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkflowCalender $WorkflowCalender, $id)
    {
        try {
            $WorkflowCalender = WorkflowCalender::findOrFail($id);
            $deleted = $WorkflowCalender->delete();

            if (!$deleted) {
                throw new \Exception('Failed to delete WorkflowCalender');
            }

            return response()->json([
                'message' => 'WorkflowCalender deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error deleting WorkflowCalender',
                'error' => $e->getMessage()
            ]);
        }
    }
}
