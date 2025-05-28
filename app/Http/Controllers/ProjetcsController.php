<?php

namespace App\Http\Controllers;

use App\Models\Projetcs;
use Illuminate\Http\Request;

class ProjetcsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'Projects',
            'data' => Projetcs::all()
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
    public function show(Projetcs $projetcs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projetcs $projetcs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projetcs $projetcs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projetcs $projetcs)
    {
        //
    }
}
