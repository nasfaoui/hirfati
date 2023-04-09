<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/artisan/param', function () {
    return view('artisan.artisanP');
});


Route::group(['middleware' => 'auth:user'], function () {
    // User routes here
});

Route::group(['middleware' => 'auth:admin'], function () {
    // Admin routes here
});

Route::group(['middleware' => 'auth:artisan'], function () {
    // Artisan routes here
});
