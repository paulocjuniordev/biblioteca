<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Saida;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();  // Aqui você está buscando todos os livros, mas você está retornando a variável errada. Alterei para usar $livros.
        return view('dashboard', ['livros' => $livros]); // Corrigido 'livro' para 'livros'
    }

    public function create()
    {
        return view('livro_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:50',
            'registro' => 'required|numeric|unique:livros,registro',
            'status' => 'required|string',
        ]);

        Livro::create($validated);

        return redirect('dashboard')->with('success', 'Livro cadastrado com sucesso!');
    }

    public function show($id)
    {
        $livros = Livro::findOrFail($id);
        return view('dashboard', compact('livros'));
    }

    public function edit($id)
    {
        $livros = Livro::find($id);
        return view('editar_livro', compact('livros'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'genero' => 'required|string|max:50',
            'registro' => "required|numeric",
            'status' => 'required|string',
        ]);

        $livros = Livro::find($id);
        $livros->update($validated);
        $livros->save();

        return redirect('/dashboard')->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $livros = Livro::findOrFail($id);
        $livros->delete();
        return redirect()->route('dashboard')->with('msg', 'Livro excluído com sucesso!');
    }
}
