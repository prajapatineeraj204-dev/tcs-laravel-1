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

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
    Route::post('/adduser', [App\Http\Controllers\AdminController::class, 'adduser'])->name('adduser');
    Route::get('/useredit/{id}', [App\Http\Controllers\AdminController::class, 'useredit'])->name('useredit');
    Route::post('/userupdate', [App\Http\Controllers\AdminController::class, 'userupdate'])->name('userupdate');
    Route::get('/userdelete/{id}', [App\Http\Controllers\AdminController::class, 'userdelete'])->name('userdelete');
});

