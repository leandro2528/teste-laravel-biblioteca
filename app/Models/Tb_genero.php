<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_genero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];
}
