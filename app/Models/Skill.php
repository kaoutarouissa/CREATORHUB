<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    // المهارة تقدر تكون فبزاف ديال الإنجازات - علاقة Many-to-Many
    public function realisations()
    {
        return $this->belongsToMany(Realisation::class);
    }
}