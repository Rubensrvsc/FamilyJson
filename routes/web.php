<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FatherSonController;

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



Route::get('/index',[FatherSonController::class,'index'])->name("index");
Route::post('/index',[FatherSonController::class,'add_father'])->name("add_father");
Route::post('/index/{father}',[FatherSonController::class,'add_child'])->name("add_child");
Route::get('/',[FatherSonController::class,'store'])->name("store");
Route::get('/',[FatherSonController::class,'read'])->name("read");
