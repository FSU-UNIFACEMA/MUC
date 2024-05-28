<?php

use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;

$anoVigente = date('Y');

$quantidadePorMes = Pessoa::select(DB::raw('MONTH(created_at) as mes'), DB::raw('COUNT(*) as quantidade'))
    ->whereRaw('YEAR(created_at) = ?', [$anoVigente])
    ->groupBy(DB::raw('MONTH(created_at)'))
    ->get();
?>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUC</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="manifest" href="../manifest.json">
    <script src="../sw-register.js"></script>
</head>
<body>

<!-- Navbar Roxo -->
@include('miscellaneous.navbar')

<!-- Conteúdo -->
<div class="content  ">

        <div class="jumbotron">
            <h1 class="display-4">Sobre este Software</h1>
            <p class="lead">Este software foi desenvolvido e doado pelo curso de Análise e Desenvolvimento de Sistemas do Unifacema, através da Liga Acadêmica do curso. Ele é destinado para uso da ONG MUC, voltada para a proteção e empoderamento de mulheres no município de Caxias, MA.</p>
            <hr class="my-4">
            <p>O objetivo deste software é auxiliar a ONG MUC no cadastro e gerenciamento de pessoas, contribuindo assim para suas atividades em prol da comunidade.</p>
            <p>Para mais informações, entre em contato com o curso de ADS do Unifacema.</p>
            <div class="text-center">
                <img src="assets/laads.png" alt="Logo da Liga Acadêmica" id="logo" style="max-width: 200px;">
            </div>
        </div>


</div>


<!-- Footer -->
@include('miscellaneous.footer')

<!-- Adicione o Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
