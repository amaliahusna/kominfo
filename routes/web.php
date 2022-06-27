<?php

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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
   /**
   * Logout Route
   */
   Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kominfoskh', [App\Http\Controllers\KominfoskhController::class, 'index'])->name('kominfoskh');
Route::post('/kominfoskh/create', [App\Http\Controllers\KominfoskhController::class, 'create'])->name('kominfoskh');
Route::get('/kominfoskh/{id}/edit', [App\Http\Controllers\KominfoskhController::class, 'edit'])->name('kominfoskh');
Route::post('/kominfoskh/{id}/update', [App\Http\Controllers\KominfoskhController::class, 'update'])->name('kominfoskh');
Route::get('/kominfoskh/delete/{id}', [App\Http\Controllers\KominfoskhController::class, 'delete'])->name('kominfoskh');
Route::resource('users', KominfoskhController::class);
Route::get('/kominfoskh/search', [App\Http\Controllers\KominfoskhController::class, 'search'])->name('search');
Route::get('/kominfoskh/exportpdf', function () {
    return view('export.kominfoskhpdf');
});
Route::get('/kominfoskh/exportpdf', [App\Http\Controllers\KominfoskhController::class, 'exportPDF'])->name('kominfoskh');
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');