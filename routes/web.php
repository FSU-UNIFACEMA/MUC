<?php

use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\PessoaProjetoController;
use App\Http\Controllers\AuthController;

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
    return view('login');
})->name('login');

Route::get('/layout', function () {
    return view('layout');
})->name('layout');

Route::get('/', function () {
    return view('login');
})->name('loginreturn');

Route::middleware(['auth'])->group(function () {
    // Rotas para a página principal
    Route::get('/index', function () {
        return view('principal');
    })->name('principal');

    // Rotas para pessoa
    Route::get('/pessoas/create', [PessoaController::class, 'create'])->name('pessoas_create');
    Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas_store');
    Route::get('/pessoas/index', [PessoaController::class, 'index'])->name('pessoas_index');
    Route::post('/pessoas/busca', [PessoaController::class, 'buscarPorNome'])->name('pessoas_busca');
    Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy'])->name('excluir_pessoas');
    Route::put('/pessoas/{id}', [PessoaController::class, 'update'])->name('atualizar_pessoas');
    Route::get('/index', [PessoaController::class, 'principalPessoa'])->name('principal');

    // Rotas para projeto
    Route::get('/projetos/create', [ProjetoController::class, 'create'])->name('projetos_create');
    Route::post('/projetos', [ProjetoController::class, 'store'])->name('projetos_store');
    Route::get('/projetos/index', [ProjetoController::class, 'index'])->name('projetos_index');
    Route::post('/projetos/busca', [ProjetoController::class, 'buscarPorNome'])->name('projetos_busca');
    Route::put('/projetos/{id}', [ProjetoController::class, 'update'])->name('atualizar_projetos');
    Route::delete('/projetos/{id}', [ProjetoController::class, 'destroy'])->name('excluir_projetos');


    Route::get('/projetos/registro', [PessoaProjetoController::class, 'create'])->name('projeto_pessoa_registro');
    Route::post('/projetos/buscapp', [PessoaProjetoController::class, 'buscaPessoaProjeto'])->name('projeto_pessoa_busca');
    Route::put('/pessoaprojetos/{id}', [PessoaProjetoController::class, 'update'])->name('projeto_pessoa_update');

    // Rotas para o usuário
    Route::post('/user/register', [AuthController::class, 'register'])->name('user_register');
    Route::get('/user/create', [AuthController::class, 'create'])->name('user_create');
    Route::post('/user/busca', [AuthController::class, 'buscarPorNome'])->name('user_busca');
    Route::get('/user/index', [AuthController::class, 'index'])->name('user_index');
    Route::put('/user/{id}', [AuthController::class, 'update'])->name('user_atualizar');
    Route::delete('/user/{id}', [AuthController::class, 'destroy'])->name('user_excluir');

    // Rotas para  Atendimento
    Route::get('/atendimentos/create', [AtendimentoController::class, 'create'])->name('atendimentos_create');
    Route::post('/atendimentos', [AtendimentoController::class, 'store'])->name('atendimentos_store');
    Route::get('/atendimentos/index', [AtendimentoController::class, 'index'])->name('atendimentos_index');
    Route::put('/atendimentos/{id}', [AtendimentoController::class, 'update'])->name('atendimentos_update');
    Route::put('/atendimentos/{id}', [AtendimentoController::class, 'destroy'])->name('atendimentos_excluir');
    Route::post('/atendimentos/busca', [AtendimentoController::class, 'buscarPorNome'])->name('atendimentos_busca');

    Route::get('/sobre', function () {
        return view('miscellaneous.sobre');
    })->name('sobre');

    // Rota de logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});


// Rota de login
Route::match(['get', 'post'], 'login', [AuthController::class, 'login'])->name('login');

Route::fallback(function () {
    return view('errorview.404');
});

Route::get('/deslogado', function () {
    return view('errorview.deslogado');
})->name('deslogado');
