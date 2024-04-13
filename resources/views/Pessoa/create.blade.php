<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUC</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style>
        .content {
            padding: 20px;
        }
        footer {
            background-color: #9932cc;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .navbar-purple {
            background-color: #9932cc;
        }
    </style>
</head>
<body>

<!-- Navbar Roxo -->
@include('miscellaneous.navbar')
<!-- Conteúdo -->
<div class="content">

    <!-- resources/views/pessoas/create.blade.php -->
    <h5 class="text-center">Dados Pessoais</h5>

    <form action="{{ route('pessoas_store') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="nome_social">Nome Social</label>
                <input type="text" class="form-control" id="nome_social" name="nome_social" placeholder="Nome Social" required>
            </div>


        </div>

    <div class="form-row">
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, Bairro, nº Casa" required>
        </div>
        <div class="form-group col-md-2">
            <label for="numero_casa">N°</label>
            <input type="text" class="form-control" id="numero_casa" name="numero_casa" placeholder="Número" required>
        </div>
        <div class="form-group col-md-4">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
        </div>
        <div class="form-group col-md-4">
            <label for="ponto_ref">Ponto de referência</label>
            <input type="text" class="form-control" id="ponto_ref" name="ponto_ref" placeholder="Ponto de referência" required>
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>

            <div class="form-group col-md-4">
                <label for="estado_civil">Estado Civil</label>
                <select id="estado_civil" class="form-control" name="estado_civil" required>
                    <option selected>Escolha...</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viuvo">Viúvo</option>
                </select>



            </div>
            <div class="form-row">


                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                    </div>
                    <div class="form-group">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" required>
                    </div>
                    <div class="form-group">
                        <label for="sexo">Gênero</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Feminino">
                            <label class="form-check-label mr-3" for="sexo">Feminino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                            <label class="form-check-label mr-3" for="sexo">Masculino</label>
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
        <input type="text" class="form-control" id="renda_mes" name="renda_mes" placeholder="Renda Mensal" required>
    </div>
            <div class="form-group">
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


        </div>
        <div class="form-group">
            <label>Identidade de Gênero</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="heterossexual" value="heterossexual">
                <label class="form-check-label" for="heterossexual">Heterossexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="homossexual" value="homossexual">
                <label class="form-check-label" for="homossexual">Homossexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="bissexual" value="bissexual">
                <label class="form-check-label" for="bissexual">Bissexual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="identidade_genero" id="transexual" value="transexual">
                <label class="form-check-label" for="transexual">Transexual</label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome_mae">Nome da mãe</label>
                <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Nome da mãe" required>
            </div>
            <div class="form-group col-md-6">
                <label for="nome_pai">Nome do pai</label>
                <input type="text" class="form-control" id="nome_pai" name="nome_pai" placeholder="Nome do pai" required>
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
                    <input class="form-check-input" type="radio" name="etnia" id="etnia" value="Branca">
                    <label class="form-check-label mr-3" for="branca">Branca</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="etnia" value="Preta">
                    <label class="form-check-label mr-3" for="preta">Preta</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="etnia" value="Parda">
                    <label class="form-check-label mr-3" for="parda">Parda</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="etnia" id="etnia" value="Indígena">
                    <label class="form-check-label mr-3" for="indigena">Indígena</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefone">Celular/WhatsApp</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="telefone" required>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
            </div>
        </div>



        </div>




        <!-- Adicione os campos restantes conforme os requisitos -->
 <hr/>

        <h5 class="text-center">Habitação</h5>
        <div class="text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="habitacao" id="habitacao" value="Proprio">
                <label class="form-check-label" for="habitacao">Próprio</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="habitação[]" id="alugado" value="Alugado">
                <label class="form-check-label" for="habitacao">Alugado</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="habitacao" id="habitacao" value="Cedido">
                <label class="form-check-label" for="habitacao">Cedido</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="habitacao" id="habitacao" value="Situacao_de_rua">
                <label class="form-check-label" for="habitacao">Situação de Rua</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="habitação[]" id="outra" value="Outra">
                <label class="form-check-label" for="outra">Outra</label>
            </div>
        </div>

        <hr/>
        <!-- Condições de Moradia -->
        <h5 class="text-center">Condições de Moradia</h5>
        <div class="text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="condicoes_moradia[]" id="taipa" value="Taipa">
                <label class="form-check-label" for="taipa">Taipa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="condicoes_moradia[]" id="alvenaria" value="Alvenaria">
                <label class="form-check-label" for="alvenaria">Alvenaria</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="condicoes_moradia[]" id="energia_eletrica" value="Energia Eletrica">
                <label class="form-check-label" for="energia_eletrica">Energia Elétrica</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="condicoes_moradia[]" id="agua_encanada" value="Água Encanada">
                <label class="form-check-label" for="agua_encanada">Água Encanada</label>
            </div>
        </div>

        <!-- Número de Cômodos -->
        <hr/>
        <div class="form-group">
            <label for="num_comodos">N° de Cômodos</label>
            <input type="number" class="form-control" id="num_comodos" name="num_comodos"  placeholder="Numero de comodos">
        </div>

        <!-- Acesso ao Domicílio -->
        <h5 class="text-center">Acesso ao Domicílio</h5>
        <div class="text-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="acesso_domicilio[]" id="calcamento" value="Calçamento">
                <label class="form-check-label" for="calcamento">Calçamento</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="acesso_domicilio[]" id="chao_batido" value="Chão Batido">
                <label class="form-check-label" for="chao_batido">Chão Batido</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="acesso_domicilio[]" id="asfalto" value="Asfalto">
                <label class="form-check-label" for="asfalto">Asfalto</label>
            </div>
        </div>


        <hr/>
        <h5 class="text-center">Questionário Sociofamiliar</h5>


        <!-- Benefício Social -->
<div class="form-group">
    <label for="beneficio_social">Possui algum benefício social?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="beneficio_social" id="beneficio_social" value="sim">
        <label class="form-check-label" for="beneficio_social">Sim</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="beneficio_social" id="beneficio_social" value="nao">
        <label class="form-check-label" for="beneficio_social">Não</label>
    </div>
    
    <div class="form-group">
        <label for="qual_beneficio">Qual?</label>
        <input type="text" class="form-control" id="qual_beneficio" name="qual_beneficio" placeholder="Digite o nome do benefício">
    </div>
</div>
<hr>
<!-- Necessidade Especial -->
<div class="form-group">
    <label for="necessidade_especial">Possui necessidade especial?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="necessidade_especial" id="necessidade_especial" value="sim">
        <label class="form-check-label" for="necessidade_sim">Sim</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="necessidade_especial" id="necessidade_especial" value="nao">
        <label class="form-check-label" for="necessidade_especial">Não</label>
    </div>
    <div class="form-group">
        <label for="qual_necessidade">Qual?</label>
        <input type="text" class="form-control" id="qual_necessidade" name="qual_necessidade" placeholder="Descreva a necessidade especial">
    </div>
</div>

<hr/>
<!-- Núcleo Familiar -->


        <!-- Adicione os campos restantes do questionário sociofamiliar conforme os requisitos -->

        <button class="btn btn-primary" type="submit" id="submitBtn">Enviar</button>
    </form>

    <!-- Modal de confirmação -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Cadastro Salvo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Cadastro salvo com sucesso!
                </div>
            </div>
        </div>
    </div>

    <script
