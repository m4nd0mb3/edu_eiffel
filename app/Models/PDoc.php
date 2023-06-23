<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDoc extends Model
{
    use HasFactory;
    
    public function estudante()
    {
        return $this->belongsTo(Estudante::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function tipo()
    {
        return $this->belongsTo(PDoc::class);
    }
}
