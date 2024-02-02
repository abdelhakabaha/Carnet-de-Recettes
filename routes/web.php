<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[RecetteController::class,'index']); 
Route::get('/create',[RecetteController::class,'create']); 
Route::post('/create    ',[RecetteController::class,'store']);

Route::delete('/delete/{recette:titre}', [RecetteController::class, 'destroy']);
Route::post('/edit/{recette:titre}', [RecetteController::class, 'edit']);
Route::put('/update/{recette}', [RecetteController::class, 'update'])->name("recettes.update");
Route::get('/search', [RecetteController::class, 'search'])->name('search');

