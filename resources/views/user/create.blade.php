@extends('layout')

@section('title', 'Dados do usuário')
@section('content')

    <!-- Conteúdo -->
    <div class="container">
        <h5 class="text-left mt-5">Dados do usuário</h5>

        <form action="{{ route('user_register') }}" method="POST">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nome do usuário</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome de usuário" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email do usuário</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email do Usuário" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Senha do usuário</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required minlength="6">
                        <button type="button" class="btn btn-outline-secondary" id="showPasswordBtn"
                                onclick="togglePasswordVisibility()">
                            <i id="eyeIcon" class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="form-group text-right">
                <button class="btn btn-primary" type="submit" id="submitBtn">Enviar</button>
            </div>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

@endsection
