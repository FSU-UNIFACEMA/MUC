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

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Numero da casa</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Telefone</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>João</td>
                            <td>joao@example.com</td>
                            <td>(11) 91234-5678</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Maria</td>
                            <td>maria@example.com</td>
                            <td>(11) 98765-4321</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Carlos</td>
                            <td>carlos@example.com</td>
                            <td>(11) 99876-5432</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Informações sobre Trabalhos</h5>
                    <!-- Adicione aqui o gráfico de trabalhos -->
                    <canvas id="graficoTrabalhos"></canvas>
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

<!-- Adicione aqui o código para o gráfico (exemplo usando Chart.js) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Exemplo de gráfico de barras para trabalhos
    var ctx = document.getElementById('graficoTrabalhos').getContext('2d');
    var graficoTrabalhos = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
            datasets: [{
                label: 'Número de Trabalhos',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>
</html>
