<?php

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

use App\Animal;
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AnimalController::class,'index']);
Route::get('/addAnimal',[AnimalController::class,'addAnimal']);
Route::get('/show-animal/{id}', [AnimalController::class,'show']);
Route::get('/edit-animal/{id}', [AnimalController::class,'edit']);




Route::post('/store-animal', [AnimalController::class,'store']);
Route::post('/delete-animal/{id}', [AnimalController::class,'delete']);
Route::post('/update-animal/{id}', [AnimalController::class,'update']);


