<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="manifest" href="../manifest.json">
    <script src="../sw-register.js"></script>
</head>
<body style="overflow-x: hidden">
    <div class="">

        {{--Navbar--}}
        @include('miscellaneous.navbar')

        <div class="px-md-5 px-3 pt-3">
            {{--Pagina que vai entrar--}}
            @yield('content')
        </div>

        {{--Footer--}}
        @include('miscellaneous.footer')

    </div>

</body>
</html>



