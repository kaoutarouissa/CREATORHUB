<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Realisation::with(['user', 'skills'])->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,User $user)
    {
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'media_url' => 'nullable|url',
            'skills' => 'required|array'
        ]);
       
        $realisation = Auth::user()->realisations()->create($request->all());
        
        return response()->json([
            'message' => 'Realisation created successfully!',
            'realisation' => $realisation->load('skills')
        ], 201);
    }

    /**
     * Display the specified resource.
     */
     public function show(Realisation $realisation)
    {
        return response()->json([
            "messg"=>"details realisation"
        ,"realisation"=>$realisation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Realisation $realisation)
    {
       

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'media_url' => 'nullable|url',
            'skills' => 'nullable|array',
            'skills.*' => 'exists:skills,id'
        ]);

        $realisation->update($validated);

        if ($request->has('skills')) {
            // sync كتمسح المهارات القدام وكتعوضهم بالجداد
            $realisation->skills()->sync($request->skills);
        }

        return response()->json([
            'message' => 'Realisation updated successfully!',
            'realisation' => $realisation->load('skills')
        ]);
    }

    

    /**
     * Remove the specified resource from storage.
     */
    // 5. نمسحو الإنجاز
    public function destroy(Realisation $realisation)
    {
        if (Auth::id() !== $realisation->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $realisation->delete();

        return response()->json(['message' => 'Realisation deleted successfully!']);
    }
    
}

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
