<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Header\FeatureController;
use App\Http\Controllers\Header\RestaurantController;
use App\Http\Controllers\Header\BanquetController;
use App\Http\Controllers\Header\FacilityController;
use App\Http\Controllers\Header\AccessController;

use App\Http\Controllers\Stay\StayController;
use App\Http\Controllers\Stay\StayPlanController;
use App\Http\Controllers\Stay\StayRoomController;
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

//ログイン前のみに使用することができる機能
Route::group(['middleware' => ['guest']], function () {

    //ログイン
    Route::prefix('/login')->group(function () {
        //ログイン画面表示
        Route::get('', [LoginController::class, 'index'])->name('login.index');
        //ログイン機能
        Route::post('', [LoginController::class, 'login'])->name('login');
    });

    //会員登録
    Route::prefix('/register')->group(function () {
        //会員登録画面表示
        Route::get('', [RegisterController::class, 'index'])->name('register.index');
        //会員登録
        Route::post('', [RegisterController::class, 'store'])->name('register.store');
    });
});

//ログイン時のみに使用することができる機能
Route::group(['middleware' => ['auth']], function () {

    /**header */
    //魅力画面表示
    Route::get('/feature', [FeatureController::class, 'index'])->name('feature.index');
    //レストラン画面表示
    Route::get('/restaurant', [RestaurantController::class, 'index'])->name('restaurant.index');
    //宴会画面表示
    Route::get('/banquet', [BanquetController::class, 'index'])->name('banquet.index');
    //施設案内画面表示
    Route::get('/facility', [FacilityController::class, 'index'])->name('facility.index');
    //アクセス画面表示
    Route::get('/access', [AccessController::class, 'index'])->name('access.index');

    /**TOP画面 */
    //TOP画面表示
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    /**宿泊プラン */
    Route::prefix('/stay')->group(function () {
        //TOP画面表示
        Route::get('', [StayController::class, 'index'])->name('stay.index');
        //予約検索結果表示
        Route::post('/search', [StayController::class, 'search'])->name('stay.search');

        /**プラン関係 */
        Route::prefix('/plan')->group(function () {
            //宿泊プラン詳細画面表示
            Route::get('/{plan_id}', [StayController::class, 'show'])->name('stay.plan.show');
            //宿泊プラン検索画面
            Route::get('/{plan_id}/search', [StayController::class, 'planSearch'])->name('stay.plan.search');
            //宿泊プラン検索結果画面
            Route::post('/search/result', [StayController::class, 'planResult'])->name('stay.plan.result');
        });

        /**客室関係 */

        // 客室一覧
        Route::get('/room', [StayController::class, 'room'])->name('stay.room.index');
    });

    //ログアウト機能
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
