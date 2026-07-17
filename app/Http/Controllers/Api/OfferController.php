<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    // 1. عرض كاع العروض المتاحة
    public function index()
    {
        return response()->json(Offer::latest()->get());
    }

    // 2. إنشاء عرض جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'budget' => 'required|numeric|min:0',
        ]);

        $offer = Offer::create($validated);

        return response()->json([
            'message' => 'Offer created successfully!',
            'offer' => $offer
        ], 201);
    }

    // 3. عرض تفاصيل عرض واحد مع المترشحين ليه (Candidates)
    public function show(Offer $offer)
    {
        return response()->json([
            "messg"=>"details offr"
        ,"offer"=>$offer]);
    }

    // 4. تعديل العرض
    public function update(Request $request, Offer $offer)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'budget' => 'sometimes|required|numeric|min:0',
        ]);

        $offer->update($validated);

        return response()->json([
            'message' => 'Offer updated successfully!',
            'offer' => $offer
        ]);
    }

    // 5. حذف العرض
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return response()->json([
            'message' => 'Offer deleted successfully!'
        ]);
    }
}