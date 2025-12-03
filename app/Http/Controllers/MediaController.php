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
        $database = DB::getDatabaseName();

        $views = DB::table('information_schema.VIEWS')
            ->select('TABLE_NAME')
            ->where('TABLE_SCHEMA', $database)
            ->get()
            ->map(function ($view) {
                return [
                    'name' => $view->TABLE_NAME,
                    'api_url' => url("/api/view/{$view->TABLE_NAME}"),
                ];
            });

        return response()->json([
            'views' => $views
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function viewData(string $view)
    {
        $database = DB::getDatabaseName();

        // Check if the view exists
        $exists = DB::table('information_schema.VIEWS')
            ->where('TABLE_SCHEMA', $database)
            ->where('TABLE_NAME', $view)
            ->exists();

        if (! $exists) {
            return response()->json([
                'error' => 'View not found'
            ], 404);
        }

        try {
            $data = DB::table($view)->get();
            $columns = Schema::getColumnListing($view);

            return response()->json([
                'view' => $view,
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
