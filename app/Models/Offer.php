<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['title', 'description', 'budget'];

    // شكون هما المستخدمين اللي قدمو على هاد العرض
    public function candidates()
    {
        return $this->belongsToMany(User::class, 'candidatures')->withTimestamps();
    }

    // شكون هما المستخدمين اللي حفظو هاد العرض
    public function savedByUsers()
    {
        return $this->belongsToMany(User::class, 'saves')->withTimestamps();
    }
}
