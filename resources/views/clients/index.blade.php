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
                <th>Avatar</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)  {{-- Cada linha será adicionada automáticamente --}}
                <tr>
                    <td>{{ $client->id }}</td>
                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a></td> {{-- O link esta sendo passado pelo blade --}}
                    <td>{{ $client->endereco }}</td>
                    <td>
                        {{-- Adiciona o avatar se existir --}}
                        @if ($client->avatar && file_exists(public_path('/'. $client->avatar)))
                            <img src="{{ asset($client->avatar) }}" alt="Avatar" width="100"> <br>
                            {{-- <img src="avatar/avatar.jpg" alt="Avatarimagem"> --}}
                        @else
                            <span>Avatar não disponível</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('clients.edit', $client)}}">Atualizar</a>
                    </td>
                    <td>
                        {{-- Mensagem de alerta ao excluir --}}
                        <form action="{{route('clients.destroy', $client)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create')}}" class="btn btn-success">Novo cliente</a>
@endsection
