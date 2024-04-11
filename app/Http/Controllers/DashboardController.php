<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tb_genero;
use App\Models\Livro;

class DashboardController extends Controller
{
    public function index() {
        $tb_generos = Tb_genero::orderBy('id', 'desc')->paginate(2);

        $totalTb_generos = Tb_genero::count();

        $livros = Livro::orderBy('created_at', 'desc')->with('tb_genero')->paginate();

        $totalLivros = Livro::count();

        // Contagem de livros alugados
        $livrosAlugados = Livro::where('estado', 'alugado')->count();

         // Contagem de livros resercados
         $livrosReservados = Livro::where('estado', 'reservado')->count();

          // Contagem de livros disponiveis
        $livrosDisponiveis = Livro::where('estado', 'disponivel')->count();

        return view('dashboards.index', ['livros'=>$livros, 'tb_generos'=>$tb_generos, 'totalTb_generos'=>$totalTb_generos, 'totalLivros'=>$totalLivros, 'livrosAlugados'=>$livrosAlugados, 'livrosReservados'=>$livrosReservados, 'livrosDisponiveis'=>$livrosDisponiveis]);
    }
}
