<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
