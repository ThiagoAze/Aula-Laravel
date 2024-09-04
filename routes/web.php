<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); /* View - Procura layout na pasta view em resources (busca pelo primeiro nome)*/
});

/*Passado o array com SiteController::class e o local que deve localizar */
Route::get('/clients', [ClientController::class, 'index']); 

// Route::get('/produto/{id}', function (int $id) { /* Pegando parametro id como inteiro */
//     dd($id);
// });
