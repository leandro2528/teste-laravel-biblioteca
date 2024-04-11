<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tb_genero;

class TbGeneroController extends Controller
{
    public function index() {
        $tb_generos = Tb_genero::orderBy('id', 'desc')->paginate(2);
        return view('generos.index', ['tb_generos'=>$tb_generos]);
    }

    public function create() {
        $tb_generos = Tb_genero::orderBy('id', 'desc')->get();
        return view('generos.create', ['tb_generos'=>$tb_generos]);
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required'
        ]);
        Tb_genero::create($request->all());

        session()->flash('success', 'Gênero Cadastrado com sucesso');

        return redirect()->route('generos-index');
    }

    public function edit($id) {
        $tb_generos = Tb_genero::where('id', $id)->first();
        return view('generos.edit', ['tb_generos'=>$tb_generos]);
    }

    public function update(Request $request, $id) {
       $data = [
        'nome' => $request->nome
       ];
        $tb_generos = Tb_genero::where('id', $id)->update($data);
        return redirect()->route('generos-index');
    }

    public function destroy($id) {
         $tb_generos = Tb_genero::where('id', $id)->delete();

         session()->flash('danger', 'Gênero deletado com sucesso!!!');

         return redirect()->route('generos-index');
     }
}
