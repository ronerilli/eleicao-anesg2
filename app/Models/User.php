<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'cpf',
        'id_uf',
        'id_perfil',
        'votou_nacional',
        'votou_estadual',
        'votou_conselho',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ufs()
    {
        return $this->belongsTo('App\Models\Uf','foreign_key', 'id_uf');

    }
    
    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil','foreign_key', 'id_perfil');

    }

    

}
