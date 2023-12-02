<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntrantsController;

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

Route::group(['prefix' => 'admin/entrants'], function(){
    Route::get('/', [EntrantsController::class, 'index'])->name('entrants.index');
    Route::get('/create', [EntrantsController::class, 'create'])->name('entrants.create');
    Route::get('/{entrants}', [EntrantsController::class, 'show'])->name('entrants.show');
    Route::get('/{entrants}/edit', [EntrantsController::class, 'edit'])->name('entrants.edit');
    Route::get('/{entrants}/delete', [EntrantsController::class, 'delete'])->name('entrants.delete');
});