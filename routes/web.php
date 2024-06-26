<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\QosController;
use App\Http\Controllers\LoginController;

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

Route::get('home',[HomeController::class, 'home'])->name('home');
Route::get('articles',[ArticlesController::class, 'articles'])->name('articles');
//Route::get('qos',[QosController::class]);
//Route::get('qos',[QosController::class, 'qos.create'])->name('qoscreate');

Route::get('/qos/index', [QosController::class, 'index']);
Route::get('/qos/create', [QosController::class, 'create']);
Route::post('/qos/store', [QosController::class, 'store']);
Route::post('/qos',[QosController::class]);

Route::get('/login',[LoginController::class, 'login'])->name('login');

//Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

