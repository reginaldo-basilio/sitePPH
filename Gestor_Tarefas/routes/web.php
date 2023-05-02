<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarefaController;

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

Route::get('/', [TarefaController::class, 'index']);
Route::get('/usuario/cadastro_usuario', [UsuarioController::class, 'create']);
Route::post('/usuario/cadastro_usuario', [UsuarioController::class, 'store'])->name('salvar_usuario');

Route::get('/tarefa/cadastro_tarefa', [TarefaController::class, 'create']);
Route::get('/tarefa/listagem_tarefa', [TarefaController::class, 'index']);
Route::post('/tarefa/cadastro_tarefa', [TarefaController::class, 'store'])->name('salvar_tarefa');

Route::get('/', function () {
    return view('welcome');
});
