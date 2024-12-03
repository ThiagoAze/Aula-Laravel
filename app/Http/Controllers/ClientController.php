<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Mostra uma lista de recursos
    {
        //Buscar os clientes no banco de dados
        //:: - quer dizer que será estatico
        $clients = Client::get(); //Client foi criada a partir da migration, representa a tabela

        //Mostrar um front-end listando os clientes
        return view('clients.index', ['clients' => $clients]); //O ponto separa a pasta do arquivo
        //1.localização dos arquivos html  2.dados do arquivo html
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //Mostrar formulário
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Gravação ao banco de dados
    {
        $dados = $request->except('_token'); //remove o campo _token que vem do form

        // Validação para caso o avatar exista
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){

            // Define o caminho completo no diretório public
            $avatarName = time() . '_' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('avatars'), $avatarName);
            $dados['avatar'] = 'avatars/' . $avatarName;

            // Formato em aula
            // $avatarPath = $request->file('avatar')->store('avatars', 'public');
            // $dados['avatar'] = $avatarPath;
        }

        Client::create($dados);
        return redirect('/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //Visualizar um dado especifico
    {
        //Buscar o cliente pelo id no banco de dados
        $client = Client::find($id);

        //Retornar os dados do cliente em uma view (show)
        return view('clients.show', [
            'client' => $client //Client no singular porque irá retornar somente um
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Busca o cliente no banco através da variável id
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Busca o cliente pelo ID
        $client = Client::find($id);

        // Dados recebidos do formulário
        $dados = $request->only('nome', 'endereco', 'observacao');

        // Verifica se há um novo arquivo de avatar enviado e se ele é válido
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){

            // Exclui o avatar antigo
            if ($client->avatar && file_exists(public_path($client->avatar))) {
                unlink(public_path($client->avatar));
            }

            // Salva o novo avatar no diretório "public/avatars"
            $avatarName = time() . '_' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move(public_path('avatars'), $avatarName);

            $dados['avatar'] = 'avatars/' . $avatarName;

            // Formato em aula
            // if($client->avatar){
            //     Storage::disk('public')->delete($client->avatar);
            // }

            // Salva o novo avatar no diretório "public/avatars"
            // $avatarPath = $request->file('avatar')->store('avatars', 'public');
            // Atualiza o campo avatar nos dados
            // $dados['avatar'] = $avatarPath;
        }

        // Atualiza os dados no banco
        $client->update($dados);

        // $client->update([
        //     //Request são dos dados do formulário
        //     'nome' => $request->nome,
        //     'endereco' => $request->endereco,
        //     'observacao' => $request->observacao,
        // ]);

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $client = Client::find($id);

        // Exclui o avatar, se existir
        if ($client->avatar && file_exists(public_path($client->avatar))) {
            unlink(public_path($client->avatar));
        }

        $client->delete();

        // if($client->avatar){
        //     Storage::disk('public')->delete($client->avatar);
        // }

        // $client->delete($id);
        return redirect('/clients');
    }
}
