<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\skills;
class Realisation extends Model
{
    //
    protected $fillable = [
    'title',
    'description',
    'media',
    'tags'
];
public function likedByUsers()
{
    return $this->belongsToMany(User::class, 'likes');
}

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
}
