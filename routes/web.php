<?php

use App\Http\Controllers\GoogleController;
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

Route::get('/', [GoogleController::class, 'index']);

Route::get('login/google', [GoogleController::class, 'redirectToProvider'])->name('login_google');
Route::get('login/google/callback', [GoogleController::class, 'handleProviderCallback'])->name('login_callback_google');
