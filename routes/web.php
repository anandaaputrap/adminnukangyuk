<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengelolaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [LoginController::class, 'index']);
Route::get('/', [LoginController::class, 'index']);
Route::post('postlogin', [LoginController::class, 'proses'])->name('postlogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'level:1'], function () {
    Route::prefix('pengelola')->name('pengelola.')->group(function () {
        Route::resource('home', PengelolaController::class);
    });
});