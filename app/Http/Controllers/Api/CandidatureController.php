<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function postuler(Request $request)
    {
        try {
            // 1. Validation: 7yedna 'exists' مؤقتا bach t9dr t'insérer bla machakil ila kano tables khawyin
            $request->validate([
                'offer_id' => 'required',
                'user_id' => 'required',
            ]);

            // 2. Vérifier wesh postula déjà
            $dejaPostule = Candidature::where('offer_id', $request->offer_id)
                                      ->where('user_id', $request->user_id)
                                      ->first();

            if ($dejaPostule) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Rak déjà dfa3ti l had l-offre.'
                ], 400);
            }

            // 3. Création de la candidature
            $candidature = Candidature::create([
                'offer_id' => $request->offer_id,
                'user_id' => $request->user_id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Candidature envoyée avec succès !',
                'data' => $candidature
            ], 201);

        } catch (\Exception $e) {
            // Ila w93at chi erreur f l-base de données, ghatban hna
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }
    // Fonction bach njibou l-liste dyal nass li dfa3ou l chi offre
    public function getCandidats($offer_id)
    {
        try {
            // Kandiro jointure bin table candidatures w table users bach njibou smia
            $candidats = \Illuminate\Support\Facades\DB::table('candidatures')
                ->join('users', 'candidatures.user_id', '=', 'users.id')
                ->where('candidatures.offer_id', $offer_id)
                ->select(
                    'candidatures.id as candidature_id',
                    'candidatures.created_at',
                    'users.id as prestataire_id',
                    'users.name as prestataire_nom',
                    'users.email'
                )
                ->get();

            // Ila l9ina nass dfa3ou, kanrej3ouhom f JSON
            return response()->json([
                'status' => 'success',
                'offer_id' => $offer_id,
                'total_candidats' => $candidats->count(),
                'data' => $candidats
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur: ' . $e->getMessage()
            ], 500);
        }
    }
}
