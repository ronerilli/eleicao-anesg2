<?php

use App\Http\Controllers\DelegaciaNacionalController;
use App\Http\Controllers\ConselhoFiscalController;
use App\Http\Controllers\DelegaciaEstadualController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VotacaoConselhoController;
use App\Http\Controllers\VotacaoEstadualController;
use App\Http\Controllers\VotacaoNacionalController;
use App\Http\Controllers\LoginController;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('nacional', [DelegaciaNacionalController::class, 'display']);


Route::get('conselhofiscal', [ConselhoFiscalController::class, 'display']);


Route::get('estadual', [DelegaciaEstadualController::class, 'display']);

Route::get('votacaonacional', [VotacaoNacionalController::class, 'display']);


Route::get('votacaoconselhofiscal', [VotacaoConselhoController::class, 'display']);


Route::get('votacaoestadual', [VotacaoEstadualController::class, 'display']);

Route::get('/', [RegistroController::class, 'registro']);
//Route::post('/', [RegistroController::class, 'salvar']);
 
Route::get('/login', [LoginController::class, 'login']);

//Route::get('/logout', 'SessionsController@destroy');

//Route::get('/', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


