<?php

namespace App\Http\Controllers;

use App\Http\LeitorController\Controllers;
use App\Models\Leitor;
use Illuminate\Http\Request;

class LeitorController extends Controller
{

    public function index()
    {

        $leitor = Leitor::all();
        return view('leitor_index', compact('leitor'));
    }


    public function create()
    {
        return view('leitor_create');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:leitors,email',
            'telefone' => 'required|string|max:20',
            'n_cadastro' => 'required|numeric|unique:leitors,n_cadastro',
        ]);


        Leitor::create($validated);

        return redirect()->route('leitor_show')->with('success', 'Leitor cadastrado com sucesso!');
    }


    public function show(request $request)
    {
        $leitor = Leitor::orderBy('id', 'DESC')->get();
        return view('/leitor_show', ['leitor' => $leitor]);
    }


    public function edit($id)
    {
        $leitor = Leitor::find($id);
        return view('editar_leitor', compact('leitor'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => "required|email|unique:leitors,email,{$id}",
            'telefone' => 'required|string|max:20',
            'n_cadastro' => "required|numeric|unique:leitors,n_cadastro,{$id}",
        ]);

        $leitor = Leitor::find($id);
        $leitor->update($validated);
        $leitor->save();

        return redirect('/leitor_show')->with('success', 'Leitor atualizado com sucesso!');
    }



    public function destroy(string $id)
    {
        $leitor = Leitor::find($id);
        $leitor->delete();
        return redirect('/leitor_show')->with('msg', 'Item excluído com sucesso');
    }
}
