<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\SociofamiliarController;

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
    return view('welcome');
});
Route::get('/login', function (){
    return view('login');
});


//rotas para Pessoa
Route::get('pessoas/create',[PessoaController::class,'create'])->name('pessoas_create');
Route::post('pessoas',[PessoaController::class,'store'])->name('pessoas_store');

//rotas parar Sociofamilar
Route::get('questionario/create',[SociofamiliarController::class,'create'])->name('sociofamiliar_create');
Route::post('questionario',[SociofamiliarController::class,'store'])->name('sociofamiliar_store');
