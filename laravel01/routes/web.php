<?php

use App\Http\Controllers\CadastroPessoaController;
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
Route::get('{etapa1}', [CadastroPessoaController::class, 'etapa1']);
Route::get('etapa2', [CadastroPessoaController::class, 'etapa2']);
Route::get('etapa3', [CadastroPessoaController::class, 'etapa3']);
Route::get('etapa4', [CadastroPessoaController::class, 'etapa4']);

Route::get('fim', function(){
    return view('end');
});
