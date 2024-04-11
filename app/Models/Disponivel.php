<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponivel extends Model
{
    use HasFactory;

    protected $fillable = [
        'livro_id'
    ];

    public function livro() {
        return $this->belongTo(Livro::class);
    }
}
