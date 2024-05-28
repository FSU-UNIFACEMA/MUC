@extends('layout')
@section('title', 'Dados pessoais')
@section('content')

<!-- Conteúdo -->
<div class="container">
    <h2 class="text-center">Dados pessoais</h2>

    <form action="{{ route('pessoas_store') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="nome_social">Nome Social</label>
                <input type="text" class="form-control" id="nome_social" name="nome_social" placeholder="Nome Social"
                       required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, Bairro, nº Casa"
                       required>
            </div>
            <div class="form-group col-md-2">
                <label for="numero_casa">N°</label>
                <input type="number" class="form-control" id="numero_casa" name="numero_casa" placeholder="Número"
                       required>
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="ponto_ref">Ponto de referência</label>
                <input type="text" class="form-control" id="ponto_ref" name="ponto_ref"
                       placeholder="Ponto de referência" required>
            </div>
            <div class="form-group col-md-4">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group col-md-4">
                <label for="estado_civil">Estado Civil</label>
                <select id="estado_civil" class="form-control" name="estado_civil" required>
                    <option selected disabled>Escolha...</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
            </div>

            <div class="form-group col-md-4">
                <label for="rg">RG</label>
                <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" required>
            </div>

            <div class="form-group col-md-4">

                <label for="sexo">Gênero</label><br>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo_feminino" value="Feminino">
                    <label class="form-check-label mr-3" for="sexo_feminino">Feminino</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo_masculino" value="Masculino">
                    <label class="form-check-label mr-3" for="sexo_masculino">Masculino</label>
                </div>

            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ocupacao">Ocupação</label>
                <input type="text" class="form-control" id="ocupacao" name="ocupacao" placeholder="Ocupação" required>
            </div>
            <div class="form-group col-md-6">
                <label for="renda_mes">Renda Mensal</label>
                <input type="number" class="form-control" id="renda_mes" name="renda_mes" placeholder="Renda Mensal"
                       required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="escolaridade">Escolaridade</label>
                <select id="escolaridade" class="form-control" name="escolaridade" required>
                    <option value="" selected disabled>Escolha...</option>
                    <option value="fundamental_incompleto">Fundamental Incompleto</option>
                    <option value="fundamental_completo">Fundamental Completo</option>
                    <option value="medio_incompleto">Médio Incompleto</option>
                    <option value="medio_completo">Médio Completo</option>
                    <option value="superior_incompleto">Superior Incompleto</option>
                    <option value="superior_completo">Superior Completo</option>
                    <option value="pos_graduacao">Pós-graduação</option>
                </select>
            </div>
        </div>


        <div class="form-group">
            <label>Identidade de Gênero</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="heterossexual"
                       value="heterossexual">
                <label class="form-check-label" for="heterossexual">Heterossexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="homossexual"
                       value="homossexual">
                <label class="form-check-label" for="homossexual">Homossexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="bissexual" value="bissexual">
                <label class="form-check-label" for="bissexual">Bissexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="transexual"
                       value="transexual">
                <label class="form-check-label" for="transexual">Transexual</label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_mae">Nome da mãe</label>
                <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Nome da mãe"
                       required>
            </div>
            <div class="form-group col-md-6">
                <label for="nome_pai">Nome do pai</label>
                <input type="text" class="form-control" id="nome_pai" name="nome_pai" placeholder="Nome do pai"
                       required>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="religiao">Religião</label>
                <input type="text" class="form-control" id="religiao" name="religiao" placeholder="Religião" required>
            </div>
            <div class="form-group col-md-6">
                <label for="etnia">Etnia/Raça</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="branca" value="Branca">
                    <label class="form-check-label mr-3" for="branca">Branca</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="preta" value="Preta">
                    <label class="form-check-label mr-3" for="preta">Preta</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="parda" value="Parda">
                    <label class="form-check-label mr-3" for="parda">Parda</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="indigena" value="Indígena">
                    <label class="form-check-label mr-3" for="indigena">Indígena</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefone">Celular/WhatsApp</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
        </div>

        <hr/>

        <h5 class="">Habitação</h5>
        <div class="d-flex flex-column">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habitacao" id="proprio" value="Proprio">
                <label class="form-check-label" for="proprio">Próprio</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habitacao" id="alugado" value="Alugado">
                <label class="form-check-label" for="alugado">Alugado</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habitacao" id="cedido" value="Cedido">
                <label class="form-check-label" for="cedido">Cedido</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habitacao" id="situacao_rua"
                       value="Situacao_de_rua">
                <label class="form-check-label" for="situacao_rua">Situação de Rua</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="habitacao" id="outra" value="Outra">
                <label class="form-check-label" for="outra">Outra</label>
            </div>

        </div>

        <hr/>
        <!-- Condições de Moradia -->
        <h5>Condições de Moradia</h5>

        <div class="d-flex flex-column">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicoes_moradia[]" id="taipa" value="Taipa">
                <label class="form-check-label" for="taipa">Taipa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicoes_moradia[]" id="alvenaria"
                       value="Alvenaria">
                <label class="form-check-label" for="alvenaria">Alvenaria</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicoes_moradia[]" id="energia_eletrica"
                       value="Energia Elétrica">
                <label class="form-check-label" for="energia_eletrica">Energia Elétrica</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicoes_moradia[]" id="agua_encanada"
                       value="Água Encanada">
                <label class="form-check-label" for="agua_encanada">Água Encanada</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="condicoes_moradia[]" id="nenhuma"
                       value="Nenhuma">
                <label class="form-check-label" for="agua_encanada">Nenhuma</label>
            </div>
        </div>

        <div class="form-group">
            <input type="number" class="form-control mt-2" id="num_comodos" name="num_comodos"
                   placeholder="Número de cômodos">
        </div>

        <hr>

        <!-- Acesso ao Domicílio -->
        <h5>Acesso ao Domicílio</h5>
        <div class="d-flex flex-column">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="acesso_domicilio[]" id="calcamento"
                       value="Calçamento">
                <label class="form-check-label" for="calcamento">Calçamento</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="acesso_domicilio[]" id="chao_batido"
                       value="Chão Batido">
                <label class="form-check-label" for="chao_batido">Chão Batido</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="acesso_domicilio[]" id="asfalto" value="Asfalto">
                <label class="form-check-label" for="asfalto">Asfalto</label>
            </div>
        </div>


        <hr/>
        <h5>Questionário Sociofamiliar</h5>

        <!-- Benefício Social -->
        <div class="form-group">
            <label for="beneficio_social">Possui algum benefício social?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="beneficio_social" id="beneficio_social_sim"
                       value="sim">
                <label class="form-check-label" for="beneficio_social_sim">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="beneficio_social" id="beneficio_social_nao"
                       value="nao">
                <label class="form-check-label" for="beneficio_social_nao">Não</label>
            </div>
            <div class="form-group">
                <label for="qual_beneficio">Qual?</label>
                <input type="text" class="form-control" id="qual_beneficio" name="qual_beneficio"
                       placeholder="Digite o nome do benefício">
            </div>
        </div>
        <hr>
        <!-- Necessidade Especial -->
        <div class="form-group">
            <label for="necessidade_especial">Possui necessidade especial?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="necessidade_especial" id="necessidade_especial_sim"
                       value="sim">
                <label class="form-check-label" for="necessidade_especial_sim">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="necessidade_especial" id="necessidade_especial_nao"
                       value="nao">
                <label class="form-check-label" for="necessidade_especial_nao">Não</label>
            </div>
            <div class="form-group">
                <label for="qual_necessidade">Qual?</label>
                <input type="text" class="form-control" id="qual_necessidade" name="qual_necessidade"
                       placeholder="Descreva a necessidade especial">
            </div>

            <div class="form-group">
                <label for="projetos" class="form-label">Projeto social que irá participar</label>
                <select class="form-control" id="projetos" name="projetos[]" required>
                    @foreach($projetos as $projeto)
                        <option value="{{ $projeto->id }}"> {{ $projeto->nome_projeto}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-primary" type="submit" id="submitBtn">Enviar</button>
            </div>
        </div>

    </form>
</div>

<!-- inputmask codigo de mascara -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var inputCpf = document.getElementById('cpf');
        inputCpf.addEventListener('input', function (e) {
            var cpf = e.target.value.replace(/\D/g, '').substring(0, 11); // Limita a 11 caracteres
            if (cpf.length > 3) {
                cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            }
            if (cpf.length > 7) {
                cpf = cpf.replace(/(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
            }
            if (cpf.length > 11) {
                cpf = cpf.replace(/(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4');
            }
            e.target.value = cpf;
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var inputTelefone = document.getElementById('telefone');
        $(inputTelefone).inputmask('(99) 99999-9999');
    });
</script>

@endsection
