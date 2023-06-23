<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaltaAdministrativa extends Model
{
    use HasFactory;

    public function administrativo()
    {
        return $this->belongsTo(Administrativo::class);
    }
}
