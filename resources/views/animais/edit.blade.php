@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Animal</h2>

    <form action="{{ route('animais.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $animal->nome }}" required>
        </div>

        <div class="mb-3">
            <label>Espécie</label>
            <input type="text" name="especie" class="form-control" value="{{ $animal->especie }}" required>
        </div>

        <div class="mb-3">
            <label>Raça</label>
            <input type="text" name="raca" class="form-control" value="{{ $animal->raca }}">
        </div>

        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="form-control" value="{{ $animal->data_nascimento }}">
        </div>

        <div class="mb-3">
            <label>Cor</label>
            <input type="text" name="cor" class="form-control" value="{{ $animal->cor }}">
        </div>

        <div class="mb-3">
            <label>Porte</label>
            <input type="text" name="porte" class="form-control" value="{{ $animal->porte }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('animais.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
