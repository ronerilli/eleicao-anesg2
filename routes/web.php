<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VotacaoNacionalController;
use App\Http\Controllers\VotacaoEstadualController;
use App\Http\Controllers\VotacaoConselhoController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\RelatorioController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/index');
});

Route::get('/votacaonacional', [VotacaoNacionalController::class, 'display'])->middleware('votounacional');
Route::post('registravoto3/{id}', [VotacaoNacionalController::class, 'registravoto3']);

Route::get('/votacaoconselhofiscal', [VotacaoConselhoController::class,'display'])->middleware('votouconselho');
Route::post('registravoto2/{id}', [VotacaoConselhoController::class, 'registravoto2']);

Route::get('/votacaoestadual', [VotacaoEstadualController::class, 'display'])->middleware('votouestadual');
Route::post('registravoto/{id}', [VotacaoEstadualController::class, 'registravoto']);

Route::get('/register', [RegisterController::class, 'register']);
 
Route::get('/login', [LoginController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/resultado', [ResultadoController::class, 'display'])->name('resultado');



