@extends('layouts.default')

@section('title', 'Livros Indisponíveis')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Relatório de Livros</h3>
        </div>
        <form class="form" action="{{ route('saida_update', $saida->id) }}" method="post" id="formleitor">
            @csrf
            @method('PUT')
            <div class="">
                <div class="input-box">
                    <label for="leitor">Leitores</label>
                    <select name="leitor_id"  required>
                        <option value="" disabled selected>Selecione</option>
                        @foreach ($leitores as $leitor)
                            <option value="{{$leitor->id }}">{{ $leitor->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="">
                <div class="input-box">
                    <label for="livros">Livros</label>
                    <select name="livro_id"  required>
                        <option value="" disabled selected>Selecione</option>
                        @foreach($livros as $livro)
                            <option value="{{$livro->id }}">{{ $livro->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="input-box">
                <label>Data de Saída</label>
                <input type="date" name="data_saida" id="registro" required="">
            </div>
            <div class="input-box">
                <label>Data de Devolução</label>
                <input type="date" name="data_devolucao" id="registro" required="">
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
@endsection
