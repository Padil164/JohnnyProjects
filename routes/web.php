<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginControllerForm;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'show']);
Route::get('/produtos', [ProdutosController::class, 'show']);
Route::get('/login', [LoginControllerForm::class, 'showLoginForm'])-> name('login');
Route::post('/login', [LoginControllerForm::class, 'login']);
Route::get('/users', [UsersController::class, 'show'])-> name('users.show');

