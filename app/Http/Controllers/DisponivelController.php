<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livro;
use App\Models\Disponivel;

class DisponivelController extends Controller
{
    public function index() {
        $disponivels = Disponivel::orderBy('created_at', 'desc')->paginate(6);
        $livros = Livro::all();
        return view('disponivels.index', ['disponivels'=>$disponivels, 'livros'=>$livros]);
    }
}
