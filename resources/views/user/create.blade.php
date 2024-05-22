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

    <!-- Modal de confirmação -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Sucesso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Usuário salvo!
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de erro -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModal">Erro!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Não foi possível salvar o usuário.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de erro de email ja existe -->
    <div class="modal fade" id="emailAlreadyExistsModal" tabindex="-1" role="dialog" aria-labelledby="errorModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModal">Erro!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Email ja está cadastrado no sistema.
                </div>
            </div>
        </div>
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

    <!-- Adicione o Bootstrap JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var Message = '{{ session('messageproj') }}';

            if (Message == 'success') {
                $('#successModal').modal('show');
            } else if (Message == 'error') {
                $('#errorModal').modal('show');
            }else if (Message == 'emailAlreadyExists'){
                $('#emailAlreadyExistsModal').modal('show');
            }
        });
    </script>

    <!-- Adicione o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
@endsection
