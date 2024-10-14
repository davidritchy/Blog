<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DevoirController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',[DevoirController::class , 'index']);
Route::get('about',[DevoirController::class , 'about']);
Route::get('article',[DevoirController::class , 'article']);
Route::get('contact',[DevoirController::class , 'contact']);
Route::post('contact',[DevoirController::class , 'contactForm']);
