<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificacaoS extends Model
{
    use HasFactory;
    public function secretaria()
    {
        return $this->belongsTo(Secretario::class);
    }
}
