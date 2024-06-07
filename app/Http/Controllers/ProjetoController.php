<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        $projeto = Projeto::all();
        return view('projeto.index', compact('projeto'));
    }

    public function create()
    {
        return view('projeto.create');
    }

    public function store(Request $request)
    {
        try {
            $projeto = Projeto::create([
                'nome_projeto' => $request->nome_projeto,
                'descricao_projeto' => $request->descricao_projeto,
            ]);
            return redirect()->route('projetos_create')->with('mensagem', 'projeto criado com sucesso');
        } catch (\Exception $e) {
            return redirect()->route('projetos_create')->with('mensagem', 'Erro ao criar o projeto');
        }

    }


    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->update($request->all());
        return redirect()->route('projetos_index')->with('mensagem', 'pessoa atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        return redirect()->route('projetos_index')->with('mensagem', 'projeto removido com sucesso!');

    }

    public function buscarPorNome(Request $request)
    {
        $projeto_nome = $request->input('nome_projeto');

        if ($projeto_nome) {
            $projeto = Projeto::where('nome_projeto', 'like', '%' . $projeto_nome . '%')->get();
        } else {
            $projeto = Projeto::all();
        }
        return view('projeto.index', compact('projeto'));
    }

}
