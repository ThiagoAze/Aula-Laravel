@extends('app')
@section('tittle', 'Novo Cliente')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{route('clients.store')}}" method="POST">
        @csrf {{-- Proteção de formulário --}}
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">
        </div>    
        <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite seu endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
        </div>
        <button class="btn btn-success" type="submit">Enviar</button>
        <a class="btn btn-success" href="{{route('clients.index')}}">Voltar</a>
    </form>
@endsection