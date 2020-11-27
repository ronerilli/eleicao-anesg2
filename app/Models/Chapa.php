<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapa extends Model
{
    use HasFactory;

    protected $fillable = [
        'votos',
    ];

    public function canditatos()
    {
        return $this->belongsTo('App\Models\Candidato','id_chapa');
    }

    public function membros(){
    return $this->belongsTo('App\Models\Membro','id_chapa');

    }


}
