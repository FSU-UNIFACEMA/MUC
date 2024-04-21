<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Projeto;
use Illuminate\Http\Request;

class PessoaProjetoController extends Controller
{
    public function create(){
        $pessoa = Pessoa::all();
        $projetos = Projeto::all();
        return view('Projeto.createpp', compact('pessoa', 'projetos'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'projeto' => 'array',
            'projeto.*' => 'exists:projetos,id',
        ]);


        $pessoa = Pessoa::findOrFail($id);

        $pessoa->projetos()->sync($request->projeto);


        return redirect()->back()->with('success', 'Projetos sociais atualizados com sucesso.');
    }
    public function buscaPessoaProjeto(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $pessoa= Pessoa::where('nome', 'like', '%' . $nome . '%')->get();
        } else {
            $pessoa = Pessoa::all();
        }
        $projetos = Projeto::all();
        return view('Projeto.createpp', compact('pessoa','projetos'));
    }

}
