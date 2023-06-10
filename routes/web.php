<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\FilereController;
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
#Filére
Route::get('filere',[FilereController::class,'index']);
Route::get('filere/create',[FilereController::class,'create']);
Route::post('filere',[FilereController::class,'store']);
Route::get('filere/{id}/edit',[FilereController::class,'edit']);
Route::post('filere/{id}',[FilereController::class,'update']);
Route::get('filere/{id}',[FilereController::class,'destroy']);

#student

Route::get('student',[StudentController::class,'index']);
Route::get('student/create',[StudentController::class,'create']);
Route::post('student',[StudentController::class,'store']);
Route::get('student/{id}/edit',[StudentController::class,'edit']);
route::get('student/{id}',[StudentController::class,'destroy']);
Route::post('student/{id}',[StudentController::class,'update']);
route::get('search',[StudentController::class,'search']);


route::get("locale/{lange}",[LocalizationController::class,'setLang']);
