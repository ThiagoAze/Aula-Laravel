@extends('app')
@section('tittle', 'Editar Cliente')
@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{route('clients.update', $client)}}" method="POST" enctype="multipart/form-data">
        @csrf {{-- Proteção de formulário --}}
        @method('PUT') {{-- Muda o método pelo blade para put --}}
        <div class="mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" value="{{$client->nome}}">
        </div>
        <div class="mb-3">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite seu endereço" value="{{$client->endereco}}">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3">{{$client->observacao}}</textarea>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control" name="avatar" id="avatar" accept="image/*"> <!-- Aceitando arquivos somente em imagens -->
        </div>
        <a class="btn btn-danger" href="{{route('clients.index')}}">Voltar</a>
        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
