<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    public function chapa()
    {
        return $this->belongsTo('App\Models\Chapa','foreign_key', 'id_chapa');

    }

    public function posicao()
    {
        return $this->belongsTo('App\Models\Posicao','foreign_key', 'id_posicao');

    }

    public function ufs()
    {
        return $this->belongsTo('App\Models\Uf','foreign_key', 'id_uf');

    }
}
