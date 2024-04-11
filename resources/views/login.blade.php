<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUC</title>
    <!-- Adicione o Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
        .navbar-purple {
            background-color: #9932cc; /* Purple */
        }
        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }
        footer {
            background-color: #9932cc;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<!-- Navbar Roxa -->
<nav class="navbar navbar-expand-lg navbar-purple">
    <a class="navbar-brand" href="#">MUC</a>
</nav>

<!-- Conteúdo -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card login-form">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Senha</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Sua senha" required>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                    </form>
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

</body>
</html>
