<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\EntrantsController;
use App\Http\Controllers\TeathersController;
use App\Http\Controllers\LessonsController;
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
Route::group(['prefix' => 'admin/lessons'], function(){
    route::get('/', [LessonsController::class,'index'])->name('lesson.index');
    route::get('/create', [LessonsController::class,'create'])->name('lesson.create');
    route::get('/{lesson}/edit', [LessonsController::class,'edit'])->name('lesson.edit');       
    route::get('/{lesson}',[LessonsController::class,'show'])->name('lesson.show');    
});
Route::group(['prefix' => 'admin/categories'], function(){
    Route::get('/', [CategoriesController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('category.create');
    Route::get('/{category}', [CategoriesController::class, 'show'])->name('category.show');
    Route::get('/{category}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
});