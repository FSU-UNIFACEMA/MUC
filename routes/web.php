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
    return view('welcome');
}) ->name('principal');
Route::get('/login', function (){
    return view('login');
});


//rotas para Pessoa
Route::get('pessoas/create',[PessoaController::class,'create'])->name('pessoas_create');
Route::post('pessoas',[PessoaController::class,'store'])->name('pessoas_store');

//rotas para Sociofamilar
Route::get('questionario/create',[SociofamiliarController::class,'create'])->name('sociofamiliar_create');
Route::post('questionario',[SociofamiliarController::class,'store'])->name('sociofamiliar_store');

//rotas para Auth
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
