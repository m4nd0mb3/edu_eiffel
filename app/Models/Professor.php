<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Professor extends Authenticatable
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
        'turma_um',
        'turma_dois',
        'turma_tres',
        'turma_quatro',
        'turma_cinco',
        'turma_seis',
        'liceu',
        'classe_um',
        'classe_dois',
        'classe_tres',
        'situacao',
        'disciplina_um',
        'disciplina_dois',
        'disciplina_tres',
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

    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class);
    }

    public function disciplina_dois()
    {
        return $this->hasMany(Disciplina::class);
    }

    public function disciplina_tres()
    {
        return $this->hasMany(Disciplina::class);
    }
    
    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
    public function liceus()
    {
        return $this->hasMany(Liceu::class);
    }
    public function notificacoes()
    {
        return $this->hasMany(OndjivaENotificacoe::class);
    }

    public function orientacao()
    {
        return $this->hasMany(OndjivaOrientecoe::class);
    }
    public function falta()
    {
        return $this->hasMany(OndjivaEFalta::class);
    }


    protected $dates = [
        'current_sign_in_at','last_sign_in'
    ];

}
