<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'about']);
Route::get('/profile',[AuthController::class,'profile']);
Route::post('/updatetimeline',[AuthController::class,'updatetimeline'])->name('updatetimeline');
Route::get('/timeline',[AuthController::class,'timeline']);
Route::get('/registration',[AuthController::class,'registration']);
Route::post('/registerUser',[AuthController::class,'registerUser'])->name('registerUser');
Route::get('/viewothers',[AuthController::class,'viewothers']);

