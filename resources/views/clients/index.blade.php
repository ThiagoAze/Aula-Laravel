{{-- Arquivo que está nosso template --}}
@extends('app')
@section('tittle', 'Lista de Clientes')
{{-- O conteúdo da página começa no @section() e termina no @endsection --}}
@section('content') 
    <h1>Lista de Clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)  {{-- Cada linha será adicionada automáticamente --}}
                <tr>
                    <td>{{ $client->id }}</td>
                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a></td> {{-- O link esta sendo passado pelo blade --}}
                    <td>{{ $client->endereco }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create')}}" class="btn btn-success">Novo cliente</a>
@endsection