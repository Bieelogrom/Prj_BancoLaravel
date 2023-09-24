<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Servicos;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/chamado', function () {
    return view('chamado');
});

Route::post('/chamado', function(Request $request){

    $request->validate([
        'checkbox' => 'required',
    ]);

    Servicos::create([
        'descApp'=>$request -> descApp,
        'descRelat'=>$request -> descRelat,
        'nomeCliente'=>$request -> nomeCliente,
        'dataEntrada'=>$request -> dataEntrada,
        'dataSaida'=>$request -> dataSaida,
        'telefoneContato'=>$request -> telefoneContato,
        'Chip'=>$request -> Chip,
        'Capa'=>$request -> Capa,
        'Operadoras'=>$request -> Operadoras,
        'caboUsb'=>$request -> caboUsb,
        'Cartao'=>$request -> Cartao,

    ]);

    echo 'Solcitação enviado com sucesso! <br>'.
    'Nome: ' . $request->nomeCliente, "<br> Data de entrada: ", $request->dataEntrada, "<br> Data de saída ", $request->dataSaida, "<br> Telefone de contato: ", $request->telefoneContato . "<br> <a href='/home'><button>Voltar para home</button></a>";

})->name('registrar_chamado');

