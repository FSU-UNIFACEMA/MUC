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

<!-- Adicione o Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

@endsection
