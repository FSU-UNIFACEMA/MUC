<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function index()
    {
        $atendimento = Atendimento::all();
        return view('atendimento.index', compact('atendimento'));
    }
    public function create(){
        return view('atendimento.create');
    }
    public function store(Request $request){
        try {
            $atendimento = Atendimento::create([
                'nome' => $request->nome,
                'cns' => $request->cns,
                'endereco' => $request -> endereco,
                'data_nascimento' => $request -> data_nascimento,
                'rg' => $request -> rg,
                'cpf' => $request -> cpf,
                'telefone' => $request -> telefone,
                'data_agendamento' => $request -> data_agendamento,
                'data_atendimento' => $request -> data_atendimento,
                'hora_atendimento' => $request -> hora_atendimento,
                'assunto' => $request -> assunto,


            ]);
            return redirect()->route('atendimentos_create')->with('success', 'Atendimento salvo com sucesso!');
        }
        catch (\Exception $e){
            return redirect()->route('atendimentos_create')->with('error', 'Não foi possível salvar o atendimento. Por favor, tente novamente.');
        }
    }
}
