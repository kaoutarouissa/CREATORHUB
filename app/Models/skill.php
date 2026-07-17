<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    //
public function realisations()
{
    return $this->belongsToMany(
        Realisation::class,
        'realisation_skill',
        'skill_id',
        'realisation_id'
    );
}
}
