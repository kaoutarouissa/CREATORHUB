<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    // Les colonnes lli 3ndna f la base de données
    protected $fillable = [
        'title',
        'description',
        'budget'
    ];
}
