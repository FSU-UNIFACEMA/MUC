@extends('layout')
@section('title', 'Pagina não encontrada')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 error-container">
                <div class="error-code">404</div>
                <div class="error-message">Página não encontrada</div>
                <a href="{{route('principal')}}" class="btn btn-primary go-back-btn">Voltar para a página inicial</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
