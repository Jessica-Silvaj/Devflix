<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'titulo', 'resumo','duracao', 'ano','classificacao','categoria_id', 'fotoCapa', 'url', 'palavraChave'
    ];

    public  static function pesquisarPorCategoriaOuParavraChave($parametro)
    {
        return  self::where('categoria_id', $parametro)
        ->orWhere('palavraChave', 'like', '%' . $parametro . '%')
        ->get();
    }
}
