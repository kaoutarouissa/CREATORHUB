<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\likes;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Models\User;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Realisation $realisation)
    {
        //
         $user =User::find(12);

        $user->likedRealisations()->syncWithoutDetaching([$realisation->id]);

        return response()->json([
            'message' => "User " . $user->name . " a liker la realisation : " . $realisation->title
            // "data"=>$user
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(likes $likes ,Realisation $realisation)
    {
        //
        //  $user = auth()->user();
                 $user =User::find(12);


        $user->likedRealisations()->detach($realisation->id);

        return response()->json([
            'message' => "User " . $user->name . " a supprimer le like de la realisation : " . $realisation->title
        ], 200);
    }
}
