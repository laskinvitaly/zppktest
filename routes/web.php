<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;




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
Route::get('/admin', 'App\Http\Controllers\AdminController')->name('main');

Route::get('/', function () {
    return view('welcome');
});

    Route::group(['prefix' => 'admin/categories'], function(){
        Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
        Route::get('/{groups}', [CategoriesController::class, 'show'])->name('categories.show');
        Route::get('/{groups}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
        
    
        
        
        });
    

    
    
  
