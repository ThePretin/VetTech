<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // --------------------
    // Listar animais
    // --------------------
    public function index()
    {
        $animais = Animal::all();

        return view('animais.index', compact('animais'));
    }

    // --------------------
    // Mostrar formulário de criação
    // --------------------
    public function create()
    {
        return view('animais.create');
    }

    // --------------------
    // Salvar animal
    // --------------------
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        Animal::create($request->all());

        return redirect()
            ->route('animais.index')
            ->with('success', 'Animal cadastrado com sucesso!');
    }

    // --------------------
    // Mostrar formulário de edição
    // --------------------
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animais.edit', compact('animal'));
    }

    // --------------------
    // Atualizar animal
    // --------------------
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return redirect()
            ->route('animais.index')
            ->with('success', 'Animal atualizado com sucesso!');
    }

    // --------------------
    // Excluir animal
    // --------------------
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()
            ->route('animais.index')
            ->with('success', 'Animal excluído com sucesso!');
    }
}
