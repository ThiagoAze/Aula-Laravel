<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Mostra uma lista de recursos
    {
        //Buscar os clientes no banco de dados
        $clients = Client::get(); //Client foi criada a partir da migration, representa a tabela
        //:: - quer dizer que será estatico
        //dd($clients);
        
        //Mostrar um front-end listando os clientes
        return view('clients.index', ['clients' => $clients]); //O ponto separa a pasta do arquivo
        //1.localização dos arquivos html  2.dados do arquivo html
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
