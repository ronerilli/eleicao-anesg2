<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicao extends Model
{
    use HasFactory;
    public function candidato()
    {
        return $this->belongsTo('App\Models\Candidato','foreign_key', 'id_candidato');

    }
}
