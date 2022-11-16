<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Autenticador;
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

Route::get('/', function () {
    return redirect('/login');
})->middleware(Autenticador::class);

Route::resource('/series', SeriesController::class)
    ->except('show');

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');

Route::get('/seasons/{season}/episodes', [EpisodeController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodeController::class, 'update'])->name('episodes.update');

Route::get('/user', [UsersController::class, 'index'])->name('user.index');
Route::get('/register', [UsersController::class, 'create'])->name('user.create');
Route::post('/register', [UsersController::class, 'store'])->name('user.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('sign');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
