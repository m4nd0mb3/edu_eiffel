<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Estudante extends Authenticatable
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
        'data_nasc',
        'nacionalidade',
        'bairro',
        'monicipio',
        'provincia',
        'name_father',
        'email_father',
        'num_father',
        'name_mather',
        'email_mather',
        'num_mather',
        'liceu',
        'classe',
        'turma',
        'password',
        'photo',
        'cer',
        'bilhete',
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


    public function notas()
    {
        return $this->hasMany(DMark::class);
    }
 
}
