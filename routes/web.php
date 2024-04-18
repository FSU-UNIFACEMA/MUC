<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\SociofamiliarController;
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




Route::get('/', function (){
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    // Rotas para a página principal
    Route::get('/index', function () {
        return view('principal');
    })->name('principal');

    // Rotas para Pessoa
    Route::get('/pessoas/create', [PessoaController::class,'create'])->name('pessoas_create');
    Route::post('/pessoas', [PessoaController::class,'store'])->name('pessoas_store');
    Route::get('/pessoas/index', [PessoaController::class,'index'])->name('pessoas_index');
    Route::post('/pessoas/busca', [PessoaController::class,'buscarPorNome'])->name('pessoas_busca');
    Route::delete('/pessoas/{id}', [PessoaController::class,'destroy'])->name('excluir_pessoas');
    Route::put('/pessoas/{id}', [PessoaController::class,'update'])->name('atualizar_pessoas');




    // Rotas para Projeto
    Route::get('/projetos/create', [ProjetoController::class,'create'])->name('projetos_create');
    Route::post('/projetos', [ProjetoController::class,'store'])->name('projetos_store');
    Route::get('/projetos/index', [ProjetoController::class,'index'])->name('projetos_index');
    Route::post('/projetos/busca', [ProjetoController::class,'buscarPorNome'])->name('projetos_busca');
    Route::put('projetos/{id}', [ProjetoController::class,'update'])->name('atualizar_projetos');
    Route::delete('projetos/{id}', [ProjetoController::class,'destroy'])->name('excluir_projetos');

// rota de registro protegida

    Route::post('/user/register', [AuthController::class, 'register'])->name('user_register');
    Route::get('/user/create', [AuthController::class, 'create'])->name('user_create');
    Route::post('/user/busca', [AuthController::class,'buscarPorNome'])->name('user_busca');
    Route::get('/user/index', [AuthController::class,'index'])->name('user_index');

});

// Rotas para Auth

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

