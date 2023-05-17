<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ConversationController;

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

Route::group(['prefix' => 'super-admin'], function ()   {
     Route::get('/', [App\Http\Controllers\SuperAdminController::class, 'index']);
});

Route::resource('groups', GroupController::class);
Route::resource('conversations', ConversationController::class);
Route::resource('/vacancie', App\Http\Controllers\VacanciesController::class)->name('vacancie',"*");
Route::resource('/vacancie-apply', App\Http\Controllers\VacancieApplyController::class)->name('vacancieapply',"*");
Route::resource('/placement', App\Http\Controllers\PlacementController::class)->name('placement',"*");

Route::group(['prefix' => 'admin'], function () {
    Route::get('/chat', [App\Http\Controllers\HomeController::class, 'chat']);
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
    Route::post('/adduser', [App\Http\Controllers\AdminController::class, 'adduser'])->name('adduser');
    Route::get('/useredit/{id}', [App\Http\Controllers\AdminController::class, 'useredit'])->name('useredit');
    Route::post('/userupdate', [App\Http\Controllers\AdminController::class, 'userupdate'])->name('userupdate');
    Route::get('/userdelete/{id}', [App\Http\Controllers\AdminController::class, 'userdelete'])->name('userdelete');
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::post('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory'])->name('addcategory');
    Route::get('/editcategory/{id}', [App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editcategory');
    Route::post('/updatecategory', [App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('updatecategory');
    Route::get('/catdelete/{id}', [App\Http\Controllers\CategoryController::class, 'catDelete'])->name('catdelete');


    Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('subcategory');
    Route::post('/addsubcategory', [App\Http\Controllers\SubCategoryController::class, 'addSubCategory'])->name('addsubcategory');

    Route::get('/editsubcategory/{id}', [App\Http\Controllers\SubCategoryController::class, 'editSubCategory'])->name('editsubcategory');

    Route::post('/updatesubcategory', [App\Http\Controllers\SubCategoryController::class, 'updateSubCategory'])->name('updatesubcategory');

    Route::get('/subcatdelete/{id}', [App\Http\Controllers\SubCategoryController::class, 'subCatDelete'])->name('subcatdelete');

    Route::resource('product', App\Http\Controllers\ProductController::class);
    
    Route::get('/getsubcategory', [App\Http\Controllers\ProductController::class, 'getsubcategory'])->name('getsubcategory');

    Route::resource('order', App\Http\Controllers\OrderController::class);

});



