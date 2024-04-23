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
    <style>
        .content {
            padding: 20px;
        }
        footer{
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<!-- Navbar Roxo -->
@include('miscellaneous.navbar')
<!-- Conteúdo -->
<div class="content">


    <div class="row">

        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Informações sobre Pessoas</h5>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Numero/casa</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($ultimasPessoas as $pessoa)
                            <tr>
                                <td>{{ $pessoa->id }}</td>
                                <td>{{ $pessoa->nome }}</td>
                                <td>{{ $pessoa->endereco }}</td>
                                <td>{{ $pessoa->numero_casa }}</td>
                                <td>{{ $pessoa->bairro }}</td>
                                <td>{{ $pessoa->telefone }}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Gráfico de novos associados no ano</h5>
                    <!-- Adicione aqui o gráfico de trabalhos -->
                    <canvas id="graficoPessoas"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
@include('miscellaneous.footer')

<!-- Adicione o Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];

    var dados = {!! $quantidadePorMes !!};

    var labels = [];
    var valores = [];

    dados.forEach(function(item) {
        var mesIndex = item.mes - 1;
        labels.push(meses[mesIndex]);
        valores.push(item.quantidade);
    });


    var ctx = document.getElementById('graficoPessoas').getContext('2d');
    var graficoPessoas = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Número de Pessoas',
                data: valores,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1,
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
