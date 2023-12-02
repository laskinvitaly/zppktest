<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Groups;
use App\Http\Controllers\Groups\DeleteController;



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
        Route::get('/', [Groups::class, 'index'])->name('groups.index');
        Route::get('/create', [Groups::class, 'create'])->name('groups.create');
        Route::get('/{groups}', [Groups::class, 'show'])->name('groups.show');
        Route::get('/{groups}/edit', [Groups::class, 'edit'])->name('groups.edit');
        Route::get('/{groups}/delete', [Groups::class, 'delete'])->name('Groups.delete');
    
    
        
        
        });
    

    
    
  
