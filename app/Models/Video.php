<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'titulo', 'resumo','duracao', 'ano','classificacao','categoria_id'
    ];
}
