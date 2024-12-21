<?php

namespace App\Http\Controllers;


use App\Models\Leitor;
use App\Models\Livro;
use App\Models\Saida;
use Illuminate\Http\Request;

class SaidaController extends Controller
{
    public function index()
    {
        $saidas = Saida::with(['leitor','livro'])->get();
        return view('saida_show', ['saidas' => $saidas]);
    }

    public function create()
    {
        $livros = Livro::all();
        $leitores = Leitor::all();
        return view('saida_create' , ['livros' => $livros, 'leitores' => $leitores]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'leitor_id' => 'required|int|exists:leitors,id',
            'livro_id' => 'required|int|exists:livros,id',
            'data_saida' => 'required|date',
            'data_devolucao' => 'required|date',
        ]);

        Saida::create($validated);

        return redirect('saida')->with('success', 'Saida cadastrado com sucesso!');
    }

    public function show($id)
    {
        $saida = Saida::findOrFail($id);
        return view('saida_show', compact('saida'));
    }

    public function edit($id)
    {
        $livros = Livro::all();
        $leitores = Leitor::all();
        $saida = Saida::find($id);
        return view('editar_saida', compact('saida', 'leitores', 'livros'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'leitor_id' => 'required|int|exists:leitors,id',
            'livro_id' => 'required|int|exists:livros,id',
            'data_saida' => 'required|date',
            'data_devolucao' => 'required|date',
        ]);

        $saida = Saida::find($id);
        $saida->fill($validated);
        $saida->save();

        return redirect('/saida')->with('success', 'Saida atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $saida = Saida::findOrFail($id);
        $saida->delete();
        return redirect()->route('saida')->with('msg', 'Saida excluído com sucesso!');
    }
}
