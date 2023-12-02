<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupsController;



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

    Route::group(['prefix' => 'admin/groups'], function(){
        Route::get('/', [GroupsController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupsController::class, 'create'])->name('group.create');
        Route::get('/{group}', [GroupsController::class, 'show'])->name('group.show');
        Route::get('/{group}/edit', [GroupsController::class, 'edit'])->name('group.edit');
 });
    

    
    
  
