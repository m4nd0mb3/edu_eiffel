<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificacaoP extends Model
{
    use HasFactory;
    public function pedagogia()
    {
        return $this->belongsTo(Pedagogia::class);
    }
}
