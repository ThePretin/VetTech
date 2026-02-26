@extends('layouts.app')

@section('content')

<section class="hero">
    <p>Plataforma de apoio para o atendimento de animais de médio e grande porte.</p>
    <a href="{{ url('/cadastro') }}" class="btn">Cadastrar um Animal</a>
</section>

<section class="conteudo">
    <h2>Bem-vinda!</h2>
    <p>
        O <strong>VetTech Care</strong> é um sistema que mostra como a tecnologia pode transformar
        o atendimento veterinário, tornando-o mais rápido, eficiente e humanizado.
    </p>
</section>

<footer>
    <p>© 2025 <strong>VetTech Care</strong> | Desenvolvido por Lorrayne França</p>
</footer>

@endsection
