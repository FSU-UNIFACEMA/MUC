<?php

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

Route::get('/', function () {
    return view('principal');
}) ->name('principal');


Route::get('/login', function (){
    return view('login');
});


//rotas para Pessoa
Route::get('/pessoas/create',[PessoaController::class,'create'])->name('pessoas_create');
Route::post('/pessoas',[PessoaController::class,'store'])->name('pessoas_store');
Route::get('/pessoas/index',[PessoaController::class,'index'])->name('pessoas_index');
Route::post('/pessoas/busca',[PessoaController::class,'buscarPorNome'])->name('pessoas_busca');
Route::delete('/pessoas/{id}',[PessoaController::class,'destroy'])->name('excluir_pessoas');
Route::put('/pessoas/{id}',[PessoaController::class,'update'])->name('atualizar_pessoas');






//rotas para Auth
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
