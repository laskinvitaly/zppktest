<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GroupsController;
use App\Http\Controllers\Admin\EntrantsController;
use App\Http\Controllers\Admin\TeathersController;
use App\Http\Controllers\Admin\LessonsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Front\PageController;
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
Route::get('/', [PageController::class, 'index'])->name('frontpage');
Route::get('/empty', [PageController::class, 'empty'])->name('empty');
Route::group(['prefix' => 'entrant'], function(){
    Route::get('/{entrant}/edit', [PageController::class, 'entrantedit'])->name('front.entrant.edit');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('main');
    Route::group(['prefix' => 'groups'], function(){
        Route::get('/', [GroupsController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupsController::class, 'create'])->name('group.create');
        Route::get('/{group}', [GroupsController::class, 'show'])->name('group.show');
        Route::get('/{group}/edit', [GroupsController::class, 'edit'])->name('group.edit');
    }); 
    Route::group(['prefix' => 'entrants'], function(){
        Route::get('/', [EntrantsController::class, 'index'])->name('entrant.index');
        Route::get('/create', [EntrantsController::class, 'create'])->name('entrant.create');
        Route::post('/', [EntrantsController::class, 'store'])->name('entrant.store');
        Route::get('/{entrant}', [EntrantsController::class, 'show'])->name('entrant.show');
        Route::patch('/{entrant}', [EntrantsController::class, 'update'])->name('entrant.update');
        Route::get('/{entrant}/edit', [EntrantsController::class, 'edit'])->name('entrant.edit');
        Route::delete('/{entrant}', [EntrantsController::class, 'destroy'])->name('entrant.destroy');
    }); 
    Route::group(['prefix' => 'teathers'], function(){
        Route::get('/', [TeathersController::class, 'index'])->name('teather.index');
        Route::get('/create', [TeathersController::class, 'create'])->name('teather.create');
        Route::get('/{teather}', [TeathersController::class, 'show'])->name('teather.show');
        Route::get('/{teather}/edit', [TeathersController::class, 'edit'])->name('teather.edit'); 
        route::post('/', [TeathersController::class, 'store'])->name('teather.store'); 
        route::patch('/{teather}', [TeathersController::class, 'update'])->name('teather.update');
        route::delete('/{teather}', [TeathersController::class, 'destroy'])->name('teather.destroy');
    });
    Route::group(['prefix' => 'lessons'], function(){
        route::get('/', [LessonsController::class,'index'])->name('lesson.index');
        route::get('/create', [LessonsController::class,'create'])->name('lesson.create');
        route::get('/{lesson}/edit', [LessonsController::class,'edit'])->name('lesson.edit');       
        route::get('/{lesson}',[LessonsController::class,'show'])->name('lesson.show');    
    });
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/', [CategoriesController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoriesController::class, 'create'])->name('category.create');
        Route::get('/{category}', [CategoriesController::class, 'show'])->name('category.show');
        Route::get('/{category}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
    });
    Route::group(['prefix' => 'news'], function(){
        route::get('/',  [NewsController::class, 'index'])->name('new.index');
        route::get('/create', [NewsController::class, 'create'])->name('new.create');
        route::post('/', [NewsController::class, 'store'])->name('new.store');
        route::get('/{new}', [NewsController::class, 'show'])->name('new.show');
        route::get('/{new}/edit', [NewsController::class, 'edit'])->name('new.edit');
        route::patch('/{new}', [NewsController::class, 'update'])->name('new.update');
        route::delete('/{new}', [NewsController::class, 'destroy'])->name('new.destroy');
    });
});
