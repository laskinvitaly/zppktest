<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\EntrantsController;
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
Route::group(['prefix' => 'admin/groups'], function(){
    Route::get('/', [GroupsController::class, 'index'])->name('group.index');
    Route::get('/create', [GroupsController::class, 'create'])->name('group.create');
    Route::get('/{group}', [GroupsController::class, 'show'])->name('group.show');
    Route::get('/{group}/edit', [GroupsController::class, 'edit'])->name('group.edit');
}); 

Route::group(['prefix' => 'admin/entrants'], function(){
Route::get('/', [EntrantsController::class, 'index'])->name('entrant.index');
Route::get('/create', [EntrantsController::class, 'create'])->name('entrant.create');
Route::get('/{entrant}', [EntrantsController::class, 'show'])->name('entrants.show');
Route::get('/{entrant}/edit', [EntrantsController::class, 'edit'])->name('entrant.edit');
});
Route::group(['prefix' => 'admin/teathers'], function(){
    Route::get('/', [TeathersController::class, 'index'])->name('teather.index');
    Route::get('/create', [TeathersController::class, 'create'])->name('teather.create');
    Route::get('/{teather}', [TeathersController::class, 'show'])->name('teather.show');
    Route::get('/{teather}/edit', [TeathersController::class, 'edit'])->name('teather.edit');   
});