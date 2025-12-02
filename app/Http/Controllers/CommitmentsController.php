<?php

namespace App\Http\Controllers;

use App\Models\Commitments;
use Illuminate\Http\Request;

class CommitmentsController extends Controller
{
    public function index()
    {
        $commitments = Commitments::all();
        return response()->json([
            'message' => 'Commitments List',
            'data' => $commitments
        ]);
    }
    public function show($id)
    {
        $commitment = Commitments::findOrFail($id);
        if (!$commitment) {
            return response()->json(['message' => 'Commitment not found'], 404);
        }
        return response()->json([
            'message' => 'Commitment retrieved successfully',
            'data' => $commitment
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $commitment = Commitments::create($data);
        $latestCreated = Commitments::orderBy('Id', 'desc')->first();
        return response()->json([
            'message' => 'Commitments created successfully',
            'data' => $latestCreated
        ]);
    }
    public function update(Request $request, $id)
    {
        $commitment = Commitments::findOrFail($id);
        if (!$commitment) {
            return response()->json(['message' => 'Commitment not found'], 404);
        }
        $commitment->update($request->all());
        $commitment->refresh();
        return response()->json([
            'message' => 'Commitment updated successfully',
            'data' => $commitment
        ]); 
    }
    public function destroy($id)
    {
        $commitment = Commitments::findOrFail($id);
        if (!$commitment) {
            return response()->json(['message' => 'Commitment not found'], 404);
        }
        $commitment->delete();
        return response()->json(['message' => 'Commitment deleted successfully']);
    }
}
