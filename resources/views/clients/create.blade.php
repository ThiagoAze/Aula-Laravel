@extends('app')
@section('tittle', 'Novo Cliente')
@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data"> <!-- Chegar na controller sem ser alterado -->
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
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control" name="avatar" id="avatar" accept="image/*"> <!-- Aceitando arquivos somente em imagens -->
        </div>
        {{-- se a imagem existir, guardará no storage --}}
        
        <a class="btn btn-danger" href="{{route('clients.index')}}">Voltar</a>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection 