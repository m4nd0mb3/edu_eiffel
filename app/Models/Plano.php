<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    use HasFactory;
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
