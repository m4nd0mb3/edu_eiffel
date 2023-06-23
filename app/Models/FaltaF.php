<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaltaF extends Model
{
    use HasFactory;
    public function f_funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
