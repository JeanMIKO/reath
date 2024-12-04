<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'date_limite', 'statut', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Tache::class);
    }
}
