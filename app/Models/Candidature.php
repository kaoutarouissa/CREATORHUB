<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    // Les champs li n9dro n3mrohom
    protected $fillable = [
        'offer_id',
        'user_id'
    ];

    // Relation: l-Candidature katntami l wa7d l-Offre
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    // Relation: l-Candidature darha wa7d l-Prestataire (User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
