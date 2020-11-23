<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\VotacaoNacionalController;
use App\Http\Controllers\VotacaoEstadualController;
use App\Http\Controllers\VotacaoConselhoController;
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
    return view('index');
});

Route::get('votacaonacional', [VotacaoNacionalController::class, 'display']);

Route::get('/votacaoconselhofiscal', [VotacaoConselhoController::class,'display'])->middleware('votouconselho');

Route::get('votacaoestadual', [VotacaoEstadualController::class, 'display']);

Route::get('/register', [RegisterController::class, 'register']);
//Route::post('/', [RegistroController::class, 'salvar']);
 
Route::get('/login', [LoginController::class, 'login']);

//Route::get('/logout', 'SessionsController@destroy');

//Route::get('/', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

