<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Secretario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'first_name',
        'second_name',
        'numero',
        'bi',
        'nif',
        'idade',
        'genero',
        'es_civil',
        'data_nasc',
        'nacionalidade',
        'bairro',
        'monicipio',
        'provincia',
        'liceu', 
        'situacao',
        'tipo',
        'password',
        'tipo',

        
        'photo',
        'hl',
        'cv',
        'bilhete',
        'do',
        'sdo',
        'gm',
      
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
