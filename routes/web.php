<?php

use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
});

Route::get('market',[MarketController::class,'index']);

Route::get('profile', [ProfileController::class, 'index']);
Route::get('wallet', [ProfileController::class, 'index']);