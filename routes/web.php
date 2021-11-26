<?php

use App\Http\Controllers\InoteController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckLogedin;
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

Route::middleware('auth')->group(function () {

    Route::get('index', [InoteController::class, 'index'])->name('show.index');

    Route::get('create', [InoteController::class, 'showCreate'])->name('show.create');

    Route::post('create', [InoteController::class, 'store'])->name('store');

    Route::get('{id}/edit', [InoteController::class, 'showEdit'])->name('show.edit');

    Route::post('{id}/edit', [InoteController::class, 'update'])->name('update');

    Route::get('{id}/delete', [InoteController::class, 'destroy'])->name('delete');

    Route::get('logout', [InoteController::class, 'logout'])->name('logout');
});



Route::get('/', [LoginController::class, 'showLogin'])->name('show.login');

Route::post('/', [LoginController::class, 'login'])->name('login');



