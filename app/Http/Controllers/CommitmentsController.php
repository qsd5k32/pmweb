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
    public function store(Request $request)
    {
        $commitment = Commitments::create($request->all());
        return response()->json([
            'message' => 'Commitments created successfully',
            'data' => $commitment
        ]);
    }
    public function update(Request $request, $id)
    {
        $commitment = Commitments::findOrFail($id);
        if (!$commitment) {
            return response()->json(['message' => 'Commitment not found'], 404);
        }
        $commitment->update($request->all());
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
