<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Projeto;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.index', compact('pessoa',));
    }

    public function principalPessoa()
    {
        $ultimasPessoas = Pessoa::latest()->take(5)->get();
        return view('principal')->with('ultimasPessoas', $ultimasPessoas);
    }

    public function create()
    {
        $projetos = Projeto::all();
        return view('pessoa.create', compact('projetos'));
    }

    public function store(Request $request)
    {
        try {
            $pessoa = Pessoa::create([
                'nome' => $request->nome,
                'nome_social' => $request->nome_social,
                'endereco' => $request->endereco,
                'numero_casa' => $request->numero_casa,
                'bairro' => $request->bairro,
                'ponto_ref' => $request->ponto_ref,
                'data_nascimento' => $request->data_nascimento,
                'estado_civil' => $request->estado_civil,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'sexo' => $request->sexo,
                'ocupacao' => $request->ocupacao,
                'renda_mes' => $request->renda_mes,
                'escolaridade' => $request->escolaridade,
                'identidade_genero' => $request->identidade_genero,
                'nome_mae' => $request->nome_mae,
                'nome_pai' => $request->nome_pai,
                'religiao' => $request->religiao,
                'etnia' => $request->etnia,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'habitacao' => $request->habitacao,
                'condicao_moradia' => $request->condicao_moradia,
                'acesso_domicilio' => implode(',', $request->acesso_domicilio),
                'beneficio_social' => $request->beneficio_social,
                'qual_beneficio' => $request->qual_beneficio,
                'necessidade_especial' => $request->necessidade_especial,
                'qual_necessidade' => $request->qual_necessidade,

            ]);
            $pessoa->projetos()->attach($request->input('projetos'));

            return redirect()->route('pessoas_create')->with('success', 'Cadastro salvo com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('pessoas_create')->with('error', 'Não foi possível salvar o cadastro. Por favor, tente novamente.');
        }
    }


    public function buscarPorNome(Request $request)
    {
        $nome = $request->input('nome');

        if ($nome) {
            $pessoa = Pessoa::where('nome', 'like', '%' . $nome . '%')->get();
        } else {
            $pessoa = Pessoa::all();
        }

        return view('pessoa.index', compact('pessoa'));
    }


    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect()->route('pessoas_index')->with('mensagem', 'pessoa apagada com sucesso.');
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return redirect()->route('pessoas_index')->with('mensagem', 'pessoa atualizada com sucesso.');
    }
}
