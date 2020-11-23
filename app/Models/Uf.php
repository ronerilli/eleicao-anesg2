<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User','id_uf');
    }

    public function chapa()
    {
        return $this->belongsTo('App\Models\Chapa','id_uf');
    }
}
