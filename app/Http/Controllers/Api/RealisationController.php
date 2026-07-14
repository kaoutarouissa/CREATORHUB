<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Api\RealisationController;
use App\Models\Realisation;


class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    /**
     * Store a newly created resource in storage.
     */
public function index()
{
    $realisations = Realisation::all();

    return response()->json([
        'message' => 'Liste des réalisations',
        'data' => $realisations
    ], 200);
}
public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'media' => 'required',
        'tags' => 'required',
    ]);

    $realisation = Realisation::create($request->all());

    return response()->json([
        'message' => 'Réalisation créée avec succès',
        'data' => $realisation
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
