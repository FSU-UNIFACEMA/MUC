@extends('layout')
@section('title', 'Controle de Atendimentos 2024')
@section('content')

    <!-- Conteúdo -->
    <div class="container">

        <h5 class="text-center">Controle de Atendimentos 2024</h5>

        <form action="{{ route('atendimentos_store') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cns">CNS (Cartão Nacional de Saúde)</label>
                    <input type="text" class="form-control" id="cns" name="cns" placeholder="CNS" required>
                </div>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço completo" required>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Contato</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="data_agendamento">Data de Agendamento</label>
                    <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="data_atendimento">Data do Atendimento</label>
                    <input type="date" class="form-control" id="data_atendimento" name="data_atendimento" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="hora_atendimento">Turno/Hora do Atendimento</label>
                    <input type="text" class="form-control" id="hora_atendimento" name="hora_atendimento" placeholder="Turno/Hora" required>
                </div>
            </div>

            <div class="form-group">
                <label for="profissional">Profissional Responsável</label>
                <input type="text" class="form-control" id="profissional" name="profissional" placeholder="Nome do profissional" required>
            </div>

            <div class="form-group">
                <label for="assunto">Assunto/Demanda</label>
                <textarea class="form-control" id="assunto" name="assunto" rows="3" placeholder="Descreva a demanda ou assunto do atendimento" required></textarea>
            </div>

            <div class="form-group text-right">
                <button class="btn btn-primary" type="submit">Salvar</button>
            </div>
        </form>

    </div>



    <!-- Adicione o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    

@endsection
