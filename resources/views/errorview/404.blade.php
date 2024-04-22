<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .error-container {
            margin-top: 100px;
            text-align: center;
        }

        .error-code {
            font-size: 72px;
            color: #343a40;
        }

        .error-message {
            font-size: 24px;
            color: #6c757d;
        }

        .go-back-btn {
            margin-top: 30px;
        }
    </style>
</head>
<body>

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
</body>
</html>
