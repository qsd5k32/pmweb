<?php

namespace App\Http\Controllers;

use App\Models\CountOfMeetings;
use Illuminate\Http\Request;

class CountOfMeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Count Of Meetings',
            'data' => CountOfMeetings::all()
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
    public function show(CountOfMeetings $countOfMeetings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CountOfMeetings $countOfMeetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CountOfMeetings $countOfMeetings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CountOfMeetings $countOfMeetings)
    {
        //
    }
}
