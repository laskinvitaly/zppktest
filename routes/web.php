<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeathersController;

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

Route::group(['prefix' => 'admin/teathers'], function(){
    Route::get('/', [TeathersController::class, 'index'])->name('teathers.index');
    Route::get('/create', [TeathersController::class, 'create'])->name('teathers.create');
    Route::get('/{teathers}', [TeathersController::class, 'show'])->name('teathers.show');
    Route::get('/{teathers}/edit', [TeathersController::class, 'edit'])->name('teathers.edit');
    Route::get('/{teathers}/delete', [TeathersController::class, 'delete'])->name('teathers.delete');
});