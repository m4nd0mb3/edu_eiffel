<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaltaSecretario extends Model
{
    use HasFactory;
    public function secretario()
    {
        return $this->belongsTo(Secretario::class);
    }
}
