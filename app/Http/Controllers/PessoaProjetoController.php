<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaProjetoController extends Controller
{
    public function create()
    {
        $pessoa = Pessoa::all();
        $projetos = Projeto::all();
        return view('projeto.createpp', compact('pessoa', 'projetos'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'projeto' => 'array',
            'projeto.*' => 'exists:projetos,id',
            'id.*' => 'exists:pessoas, id'
        ]);

        $pessoa = Pessoa::findOrFail($request->id);

        $pessoa->projetos()->sync($request->projeto);
        return redirect()->back()->with('mensagem', 'Projetos sociais atualizados com sucesso.');
    }

    public function buscaPessoaProjeto(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $pessoa = Pessoa::where('nome', 'like', '%' . $nome . '%')->get();
        } else {
            $pessoa = Pessoa::all();
        }
        $projetos = Projeto::all();
        return view('projeto.createpp', compact('pessoa', 'projetos'));
    }

    public function destroy($id)
    {
        DB::table('pessoa_projeto')->where('pessoa_id', $id)->delete();

        return redirect()->back()->with('mensagem', 'Projetos sociais removido com sucesso.');
    }

}
