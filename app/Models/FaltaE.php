<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaltaE extends Model
{
    use HasFactory;

    protected $casts = [
        'estudante_id' => 'array'
     ] ;
}
