<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use App\Models\User;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){  
$query = Realisation::query();

if ($request->filled('name')) {
    $query->whereHas('skills', function ($q) use ($request) {
        $q->where('name', $request->name);
    });
}
if ($request->filled('tarifs')) {
    $query->whereHas('user', function ($q) use ($request) {
        $q->where('tarifs', $request->tarifs);
    });
}

$realisations = $query->get();

return response()->json($realisations);
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
