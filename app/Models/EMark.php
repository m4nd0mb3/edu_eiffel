<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMark extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'e_marks';


    public function estudante()
    {
        return $this->belongsTo(Estudante::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
