<?php

namespace App\Http\Controllers;

use App\Models\SiteHandOverDays;
use Illuminate\Http\Request;

class SiteHandOverDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Site Hand Over Days',
            'data' => SiteHandOverDays::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(SiteHandOverDays $siteHandOverDays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteHandOverDays $siteHandOverDays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteHandOverDays $siteHandOverDays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteHandOverDays $siteHandOverDays)
    {
        //
    }
}
