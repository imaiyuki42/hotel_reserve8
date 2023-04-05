<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::group(['middleware' => ['guest']], function () {
    //ログイン
    Route::prefix('/login')->group(function() {
        //ログイン画面表示
        Route::get('', [LoginController::class, 'index'])->name('login.index');
        //ログイン機能
        Route::post('', [LoginController::class, 'login'])->name('login.login');

        //会員登録
        Route::prefix('/register')->group(function() {
            //会員登録画面表示
            Route::get('', [RegisterController::class, 'index'])->name('register.index');
            //会員登録
            Route::post('', [RegisterController::class, 'store'])->name('register.store');
        });
    });
});

Route::group(['middleware' => ['auth']], function () {
    //画面表示
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
});

