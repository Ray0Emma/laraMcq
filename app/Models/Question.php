<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function formulaire()
    {
        return $this->belongsTo(Formulaire::class);
    }

    public function reponse()
    {
        return $this->hasMany(Question::class);
    }
}
