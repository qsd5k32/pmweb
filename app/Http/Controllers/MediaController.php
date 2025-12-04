<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function views(): JsonResponse
    {
        $views = DB::select("
            SELECT TABLE_NAME 
            FROM INFORMATION_SCHEMA.VIEWS 
            WHERE TABLE_SCHEMA = 'dbo'
            ORDER BY TABLE_NAME
        ");

        return response()->json([
            'views' => collect($views)->map(function ($view) {
                return [
                    'name' => $view->TABLE_NAME,
                    'api_url' => url("/api/view/{$view->TABLE_NAME}"),
                ];
            })
        ]);
    }

    public function viewData(string $view): JsonResponse
    {
        // Check if the view exists
        $exists = DB::select("
            SELECT 1 
            FROM INFORMATION_SCHEMA.VIEWS 
            WHERE TABLE_SCHEMA = 'dbo' 
            AND TABLE_NAME = ?
        ", [$view]);

        if (empty($exists)) {
            return response()->json([
                'error' => 'View not found'
            ], 404);
        }

        try {
            $data = DB::table($view)->get();
            $columns = Schema::getColumnListing($view);

            return response()->json([
                'view' => $view,
                // 'columns' => $columns,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Could not fetch data from view',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        //
    }
}
