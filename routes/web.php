<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\InvestorController;
use App\Investor;



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


Route::get('/users',[UserController::class,'index']); 

Route::post('/users',[UserController::class,'store']);
Route::get('/users/create',[UserController::class,'create']);

Route::get('/investors',[InvestorController::class,'index']);
Route::post('/investors',[InvestorController::class,'store']);
Route::get('/investors/create',[InvestorController::class,'create']);

Route::get('/',[SiteController::class,'index']);

