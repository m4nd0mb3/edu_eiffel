<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pedagogia extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
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
        'password',

        
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
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function provas()
    {
        return $this->hasMany(ProvaEO::class);
    }

    public function professor()
    {
        return $this->hasMany(Professoro::class);
    }

    public function estudante()
    {
        return $this->hasMany(Estudanteo::class);
    }

  
   
}
