<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'editora',
        'genero_id',
        'ano_de_lancamento',
        'estado'
    ];

    public function tb_genero() {
        return $this->belongsTo(Tb_genero::class, 'genero_id');
    }
}
