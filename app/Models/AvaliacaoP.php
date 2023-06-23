<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoP extends Model
{
    use HasFactory;
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
