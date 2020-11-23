<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapa extends Model
{
    use HasFactory;

    public function ufs()
    {
        return $this->belongsTo('App\Models\Uf','foreign_key', 'id_uf');

    }

    public function candidato()
    {
        return $this->belongsTo('App\Models\Candidato','foreign_key', 'id_candidato');

    }

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo','foreign_key', 'id_cargo');
        
    }
    
}

