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
<nav class="navbar navbar-expand-lg navbar-purple">
    <a class="navbar-brand" href="#">Nome da Empresa</a>
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#pessoas">Pessoas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#trabalhos">Trabalhos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#trabalhos">Sair</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Conteúdo -->
<div class="content">

    <!-- Cards de Pessoas e Trabalhos -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Informações sobre Pessoas</h5>
                    <!-- Adicione aqui a tabela de pessoas -->
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
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
<footer>
    <div class="container">
        <span>© 2024 Nome da Empresa. Todos os direitos reservados.</span>
    </div>
</footer>

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
