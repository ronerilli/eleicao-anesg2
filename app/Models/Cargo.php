<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    public function chapa()
    {
        return $this->belongsTo('App\Models\Chapa','foreign_key', 'id_cargo');
        
    }
}
