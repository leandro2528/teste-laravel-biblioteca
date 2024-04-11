<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livro;
use App\Models\Tb_genero;

class LivroController extends Controller
{
    public function index() {
        $livros = Livro::orderBy('created_at', 'desc')->with('tb_genero')->get();
        $tb_generos = Tb_genero::all();

        return view('livros.index', ['livros'=>$livros, 'tb_generos'=>$tb_generos,]);
    }

    public function create() {
        $livros = Livro::all();
        $tb_generos = Tb_genero::all();
        return view('livros.create', ['livros'=>$livros, 'tb_generos'=>$tb_generos]);
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required',
            'editora' => 'required',
            'genero_id' => 'required',
            'ano_de_lancamento' => 'required',
            'estado' => 'required'
        ]);
        Livro::create($request->all());

        session()->flash('success', 'Livro cadastrado com sucesso!');

        return redirect()->route('livros-index');
    }

    public function edit($id) {
        $livros = Livro::findOrFail($id);
        $tb_generos = Tb_genero::all();
        return view('livros.edit', ['livros'=>$livros, 'tb_generos'=>$tb_generos]);
    }

    public function update(Request $request ,$id) {
        $request->validate([
            'titulo' => 'required',
            'editora' => 'required',
            'genero_id' => 'required',
            'ano_de_lancamento' => 'required',
            'estado' => 'required'
        ]);
        $livros = Livro::findOrFail($id);
        $livros->update($request->all());
        $tb_generos = Tb_genero::all();

        session()->flash('warning', 'Livro editado com sucess!');

        return redirect()->route('livros-index');
    }

    public function destroy($id) {
        $livros = Livro::findOrFail($id);
        $livros->delete();
        $tb_generos = Tb_genero::all();

        session()->flash('danger', 'Livro excluido com sucesso!');

        return redirect()->route('livros-index');
    }
    // Ações de reserva, aluguel e devolução de livros

   


}
