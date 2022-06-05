<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;  

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

 

Route::get('/login', [formController::class, 'viewData']); 
Route::post('/insert-data', [formController::class,'insertData']); //axios post insert  