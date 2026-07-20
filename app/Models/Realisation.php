<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Realisation extends Model
{
    protected $fillable = ['title', 'description', 'media_url', 'user_id'];

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
}
