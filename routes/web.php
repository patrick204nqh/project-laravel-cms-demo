<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>['can:isAdmin'] , 'as'=>'backend.'], function() {
    // Route::group(['prefix'=>'products','as'=>'products.'],function() {
    //   Route::get('/', [ProductsController::class, 'list'])->name('list');
    //   Route::get('/create', [ProductsController::class, 'create'])->name('create');
    //   Route::post('/create', [ProductsController::class, 'store'])->name('store');
    //   Route::post('/{id}/update', [ProductsController::class, 'update'])->name('update');
    //   Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('edit');
    //   Route::post('/upload-images', [ProductsController::class, 'uploadImages'])->name('upload_images');
    // });
    Route::get('/', ['App\Http\Controllers\Backend\DashboardController', 'index'])->name('index');
});
