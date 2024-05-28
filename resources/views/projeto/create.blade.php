@extends('layout')
@section('title','Dados do projeto')
@section('content')

<!-- Conteúdo -->
<div class="container">


    <h5 class="text-left mt-5">Dados do projeto</h5>

    <form action="{{ route('projetos_store') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome do projeto</label>
                <input type="text" class="form-control" id="nome" name="nome_projeto" placeholder="Nome do projeto"
                       required>
            </div>
            <div class="form-group col-md-6">
                <label for="descricao_projeto">Descrição do projeto</label>
                <input type="text" class="form-control" id="descricao_projeto" name="descricao_projeto"
                       placeholder="Descrição do projeto"
                       required>
            </div>
        </div>

        <div class="form-group text-right">
            <button class="btn btn-primary" type="submit" id="submitBtn">Enviar</button>
        </div>

    </form>

</div>


<!-- Footer -->
<footer class="fixed-bottom">
    <!-- Conteúdo do footer -->
</footer>


<!-- Modal de confirmação -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
     aria-hidden="true">
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

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModal">Não foi possível salvar o cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Erro!
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var Message = '{{ session('messageproj') }}';

        if (Message == 'success') {
            $('#successModal').modal('show');
        } else if (Message == 'error') {
            $('#errorModal').modal('show');
        }
    });
</script>


@endsection
