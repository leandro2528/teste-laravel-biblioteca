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

        $totalLivros = Livro::count();

        return view('dashboards.index', ['tb_generos'=>$tb_generos, 'totalTb_generos'=>$totalTb_generos, 'totalLivros'=>$totalLivros]);
    }
}
