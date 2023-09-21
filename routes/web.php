<?php

use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\RequestSampleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/hello_world', fn () => view('hello_world'));

Route::get('/hello', fn () => view('hello', [
    'name' => '田中',
    'course' => 'Lalavel9'
]));

Route::get('/', fn () => view('index'));
Route::get('/curriculum', fn () => view('curriculum'));

// 世界の時間
Route::get('/world-time', [UtilityController::class,'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class,'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class,'montyHall']);

//リクエスト
Route::get('/form', [RequestSampleController::class,'form']);
Route::get('/query-strings', [RequestSampleController::class,'queryStrings']);
Route::get('/users/{id}',[RequestSampleController::class,'profile'])->name('profile');
Route::get('/products/{category}/{year}',[RequestSampleController::class,'productsArchive']);
Route::get('/route-link',[RequestSampleController::class,'routeLink']);