@extends('layout')
@section('title', 'Deslogado!')
@section('content')
    <div class="container text-center">
        <h1>Você está deslogado!</h1>
        <p>Você será redirecionado para a tela de login em:</p>
        <h2 id="countdown">5</h2>
    </div>
    <!-- Adicione o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Função para iniciar o contador regressivo
        function startCountdown() {
            let seconds = 5;
            const countdownElement = document.getElementById('countdown');

            const countdownInterval = setInterval(function () {
                seconds--;
                countdownElement.textContent = seconds;

                if (seconds <= 0) {
                    clearInterval(countdownInterval);
                    redirectToLogin();
                }
            }, 1000);
        }

        function redirectToLogin() {
            window.location.href = '{{route('loginreturn')}}';
        }

        document.addEventListener('DOMContentLoaded', function () {
            startCountdown();
        });
    </script>
@endsection
