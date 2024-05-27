<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimentos = Atendimento::all();
        return view('atendimento.index', compact('atendimentos'));
    }

    public function create()
    {
        return view('atendimento.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'cns' => 'required',
            'endereco' => 'required',
            'data_nascimento' => 'required|date',
            'rg' => 'required',
            'telefone' => 'required',
            'data_agendamento' => 'required|date',
            'data_atendimento' => 'required|date',
            'hora_atendimento' => 'required',
            'assunto' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('atendimentos_create')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $atendimento = Atendimento::create($request->all());
            return redirect()->route('atendimentos_create')->with('mensagem', 'Atendimento salvo com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('atendimentos_create')->with('mensagem', 'Não foi possível salvar o atendimento. Por favor, tente novamente.');
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'cns' => 'required',
            'endereco' => 'required',
            'data_nascimento' => 'required|date',
            'rg' => 'required',
            'telefone' => 'required',
            'data_agendamento' => 'required|date',
            'data_atendimento' => 'required|date',
            'hora_atendimento' => 'required',
            'assunto' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('atendimentos_update', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $atendimento = Atendimento::findOrFail($id);
        $atendimento->update($request->all());
        return redirect()->route('atendimentos_index')->with('mensagem', 'Atendimento atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $atendimento = Atendimento::findOrFail($id);
        $atendimento->delete();
        return redirect()->route('atendimentos_index')->with('mensagem', 'Atendimento removido com sucesso!');
    }

    public function buscarPorNome(Request $request)
    {
        $atendimento_nome = $request->input('nome_atendido');

        if ($atendimento_nome) {
            $atendimentos = Atendimento::where('nome', 'like', '%' . $atendimento_nome . '%')->get();
        } else {
            $atendimentos = Atendimento::all();
        }
        return view('atendimentos.index', compact('atendimentos'));
    }
}
