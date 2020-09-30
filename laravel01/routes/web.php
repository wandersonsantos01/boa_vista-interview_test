<?php

use App\Http\Controllers\FormularioPessoaController;
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
Route::pattern('etapa1', '|etapa1');
Route::get('{etapa1}', [FormularioPessoaController::class, 'etapa1']);
Route::get('etapa2', [FormularioPessoaController::class, 'etapa2']);
Route::get('etapa3', [FormularioPessoaController::class, 'etapa3']);
Route::get('etapa4', [FormularioPessoaController::class, 'etapa4']);

Route::get('fim', function(){
    return view('end');
});
