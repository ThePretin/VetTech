<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>VetTech Care</title>

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
    <h1>VetTech Care</h1>
    <nav>
        <a href="{{ url('/') }}">Início</a>
        <a href="{{ url('/sobre') }}">Sobre</a>
        <a href="{{ url('/cadastro') }}">Cadastro</a>
        <a href="{{ url('/atendimento') }}">Atendimentos</a>
        <a href="{{ url('/contato') }}">Contato</a>
    </nav>
</header>

@yield('content')

</body>
</html>
