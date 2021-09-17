<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

//rotas acessadas via get
Route::get('/', [loginController::class, 'login']);
Route::get('/recuperar-senha', [loginController::class, 'recuperarSenha']);

//rotas acessadas via post
Route::post('/', [loginController::class, 'logar']);