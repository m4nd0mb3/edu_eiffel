<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DMark extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'd_marks';


    public function estudante()
    {
        return $this->belongsTo(Estudante::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
