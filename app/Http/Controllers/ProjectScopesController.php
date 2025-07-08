<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectScopesController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Project Scopes',
            'data' => \App\Models\ProjectScopes::all()
        ]);
    }
    public function show($id)
    {
        $scope = \App\Models\ProjectScopes::findOrFail($id);
        return response()->json([
            'message' => 'Project Scope retrieved successfully',
            'data' => $scope
        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'Active' => 'nallable',
            'Note' => 'nullable|string',
            'Date' => 'nullable|date',
            'Scope' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'ProjectId' => 'required|string|exists:AV_Projects,Id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validate->errors()
            ], 422);
        }

        $data = $validate->validated();
        $scope = \App\Models\ProjectScopes::create($data);

        return response()->json([
            'message' => 'Project Scope created',
            'data' => $scope
        ]);
    }
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'Active' => 'nullable',
            'Note' => 'nullable|string',
            'Date' => 'nullable|date',
            'Scope' => 'required|string|max:255',
            'Description' => 'nullable|string',
            'ProjectId' => 'required|string|exists:AV_Projects,Id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validate->errors()
            ], 422);
        }
        $scope = \App\Models\ProjectScopes::findOrFail($id);
        if (!$scope) {
            return response()->json([
                'message' => 'Project Scope not found'
            ], 404);
        }
        $data = $validate->validated();
        $scope->update($data);

        return response()->json([
            'message' => 'Project Scope updated',
            'data' => $scope
        ]);
    }
    public function destroy($id)
    {
        $scope = \App\Models\ProjectScopes::findOrFail($id);
        $scope->delete();    

        return response()->json([
            'message' => 'Project Scope deleted successfully',
        ]);
    }
}
