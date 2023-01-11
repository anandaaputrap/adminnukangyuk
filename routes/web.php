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
Route::controller(PengelolaController::class)->group(function(){
    Route::get('/', 'indexlogin')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){
        Route::resource('home', PengelolaController::class);
    });
});