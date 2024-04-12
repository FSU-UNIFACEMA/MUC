<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function create(){
        return view('pessoa.create');
    }
    public function store(Request $request){
        $request->validate([
            'nome'=>'required',
            'nome_social'=>'required',
            'endereco'=>'required',
            'numero_casa'=>'required|numeric',
            'bairro'=>'required',
            'ponto_ref'=>'required',
            'data_nascimento'=>'required',
            'estado_civil'=>'required|numeric',
            'cpf'=>'required',
            'rg'=>'required',
            'sexo'=>'required|numeric',
            'ocupacao'=>'required',
            'renda_mes'=>'required',
            'escolaridade'=>'required',
            'identidade_genero'=>'required|numeric',
            'nome_mae'=>'required',
            'nome_pai'=>'required',
            'religiao'=>'required',
            'etinia'=>'required|numeric',
            'telefone'=>'required',
            'email'=>'required',
            'habitacao'=>'required|numeric',
            'condicao_moradia'=>'required|numeric',
            'acesso_domicilio'=>'required|numeric',
            'beneficio_social'=>'required|numeric',
            'qual_beneficio'=>'required',
            'necessidade_especial'=>'required|numeric',
            'qual_necessidade'=>'required'

        ]);
        $pessoa = Pessoa::create([
            'nome' =>$request ->nome,
            'nome_social'=>$request ->nome_social,
            'endereco'=>$request ->endereco,
            'numero_casa'=>$request ->numero_casa,
            'bairro'=>$request ->bairro,
            'ponto_ref'=>$request ->ponto_ref,
            'data_nascimento'=>$request ->data_nascimento,
            'estado_civil'=>$request ->estado_civil,
            'cpf'=>$request ->cpf,
            'rg'=>$request ->rg,
            'sexo'=>$request ->sexo,
            'ocupacao'=>$request ->ocupacao,
            'renda_mes'=>$request ->renda_mes,
            'escolaridade'=>$request ->escolaridade,
            'identidade_genero'=>$request ->identidade_genero,
            'nome_mae'=>$request ->nome_mae,
            'nome_pai'=>$request ->nome_pai,
            'religiao'=>$request ->religiao,
            'etnia'=>$request ->etnia,
            'telefone'=>$request ->telefone,
            'email'=>$request ->email,
            'habitacao'=>$request ->habitacao,
            'condicao_moradia'=>$request ->condicao_moradia,
            'acesso_domicilio'=>$request ->acesso_domicilio,
        ]);
        $pessoa -> questionarioSocioFamiliar()->create([
            'beneficio_social'=>$request ->beneficio_social,
            'qual_beneficio'=>$request ->qual_beneficio,
            'necessidade_especial'=>$request ->necessidade_especial,
            'qual_necessidade'=>$request ->qual_necessidade,

        ]);
 return redirect()->route('pessoa_create')->with('sucess','Cadastro salvo com sucesso"!');
}
}
