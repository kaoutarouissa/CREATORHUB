<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    protected $fillable = ['name', 'description'];

    // مساحة العمل يقدر يدخل ليها بزاف ديال المستخدمين
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}