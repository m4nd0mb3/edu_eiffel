<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EFalta extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [ 'estudante_id'
     ] ;


     
    public function estudante()
    {
        return $this->belongsTo(Estudante::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
    public function secretario()
    {
        return $this->belongsTo(Secretario::class);
    }
}
