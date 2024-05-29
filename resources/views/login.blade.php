<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="manifest" href="../manifest.json">
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="row justify-content-center align-items-center" style="height: 100vh;">

            <div class="col-md-6">
                <h3>MUC - Mulheres e Meninas de Caxias</h3>
                <div class="card">

                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body d-flex flex-column justify-content-center">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus />

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Senha</label>
                                <input type="password" id="password" class="form-control @error('email') is-invalid @enderror" name="password" required autocomplete="email" autofocus />

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Login') }}
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicione o Bootstrap JS -->


    @include('miscellaneous.footer')

</body>
</html>
