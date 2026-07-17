<?php
namespace App\Models;

use App\Models\Realisation;
use App\Models\Workspace;
use App\Models\Offer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    

    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'bio', 'tarifs'
    ];

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }

    public function workspaces()
    {
        return $this->belongsToMany(Workspace::class);
    }

    public function likedRealisations()
    {
        return $this->belongsToMany(Realisation::class, 'likes')->withTimestamps();
    }

    public function candidatures()
    {
        return $this->belongsToMany(Offer::class, 'candidatures')->withTimestamps();
    }

    public function savedOffers()
    {
        return $this->belongsToMany(Offer::class, 'saves')->withTimestamps();
    }
}