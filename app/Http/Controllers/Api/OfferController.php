<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    // 1. Récupérer toutes les offres (GET) - Bach ybano f l-Job Board
    public function index()
    {
        try {
            // Njibou ga3 les offres mretbin mn jdid l-9dim
            $offers = Offer::orderBy('created_at', 'desc')->get();

            return response()->json([
                'status' => 'success',
                'data' => $offers
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }

    // 2. Créer une nouvelle offre (POST) - Mnin l-Créateur y-publier annonce
    public function store(Request $request)
    {
        try {
            // Validation dyal les données
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'budget' => 'required|numeric',
            ]);

            // Création dyal l'offre f la base de données
            $offer = Offer::create([
                'title' => $request->title,
                'description' => $request->description,
                'budget' => $request->budget,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Offre d\'emploi publiée avec succès !',
                'data' => $offer
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }
}
