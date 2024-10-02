@extends('app')
@section('tittle', 'Detalhes do Cliente')
@section('content')
  <div class="card">
    <div class="card-header">
      Detalhes do Cliente {{ $client->nome}}
    </div>
    <div class="card-body">
        <p><strong>ID: {{$client->id}}</strong></p>
        <p><strong>Nome: {{$client->nome}}</strong></p>
        <p><strong>Endereço: {{$client->endereco}}</strong></p>
        <p><strong>Observação: {{$client->observacao}}</strong></p>
        <br>
        <a class="btn btn-success" href="{{route('clients.index')}}">Voltar</a>
    </div>
  </div>
@endsection