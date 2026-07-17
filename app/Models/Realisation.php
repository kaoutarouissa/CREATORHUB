<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
// use App\Models\skills;
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 088aaf58a23af998fa68e0240a37deec1f7cfdcc
class Realisation extends Model
{
    protected $fillable = ['title', 'description', 'media_url', 'user_id'];

<<<<<<< HEAD
public function savedByUsers()
{
    return $this->belongsToMany(User::class, 'saves');
}

public function skills()
{
    return $this->belongsToMany(
        Skill::class,
        'realisation_skill',
        'realisation_id',
        'skill_id'
    );
}
public function user()
{
    return $this->belongsTo(User::class);
}
=======
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }
>>>>>>> 088aaf58a23af998fa68e0240a37deec1f7cfdcc
}
