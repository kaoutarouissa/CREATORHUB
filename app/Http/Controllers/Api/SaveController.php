<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\saves;
use Illuminate\Http\Request;
use App\Models\Realisation;
use App\Models\User;
use Symfony\Component\HttpFoundation\JsonResponse;

class SaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function store(Realisation $realisation): JsonResponse
    {
        $user = User::find(1);
        $user->savedRealisations()->syncWithoutDetaching([$realisation->id]);

        return response()->json([
            'message' => 'Realisation sauvegardee.',
            'data'=>$user
        ], 201);
    }
    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(saves $saves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, saves $saves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Realisation $realisation): JsonResponse
    {
        $user = User::find(1);
        $user->savedRealisations()->detach($realisation->id);

        return response()->json([
            'message' => 'Réalisation retirée des sauvegardes.'
        ]);
    }
}
