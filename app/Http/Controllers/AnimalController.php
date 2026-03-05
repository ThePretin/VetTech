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
    // Mostrar formulário
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
            'raca' => 'nullable|string|max:255',
            'cor' => 'nullable|string|max:255',
            'data_nascimento' => 'nullable|date',
            'porte' => 'required|string',
        ]);

        Animal::create([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'cor' => $request->cor,
            'data_nascimento' => $request->data_nascimento,
            'porte' => $request->porte,
        ]);

        return redirect()
            ->route('animais.index')
            ->with('success', 'Animal cadastrado com sucesso!');
    }

    // --------------------
    // Editar
    // --------------------
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animais.edit', compact('animal'));
    }

    // --------------------
    // Atualizar
    // --------------------
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
            'raca' => 'nullable|string|max:255',
            'cor' => 'nullable|string|max:255',
            'data_nascimento' => 'nullable|date',
            'porte' => 'required|string',
        ]);

        $animal = Animal::findOrFail($id);

        $animal->update([
            'nome' => $request->nome,
            'especie' => $request->especie,
            'raca' => $request->raca,
            'cor' => $request->cor,
            'data_nascimento' => $request->data_nascimento,
            'porte' => $request->porte,
        ]);

        return redirect()
            ->route('animais.index')
            ->with('success', 'Animal atualizado com sucesso!');
    }

    // --------------------
    // Excluir
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
