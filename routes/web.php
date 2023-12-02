<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\LessonsController\DeleteControllers;
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


Route::group(['prefix' => 'admin/lessons'], function(){
    route::get('/', [LessonsController::class,'index'])->name('lessons.index');
        route::get('create', [LessonsController::class,'create'])->name('lessons.create');
        route::get('/{lessons}', [LessonsController::class,'edit'])->name('lessons.edit');       
         route::get('/{lessons}/show',[LessonsController::class,'show'])->name('lessons.show');
         route::get('/{lessons}/delete',[LessonsController::class,'delete'])->name('lessons.delete');
       });