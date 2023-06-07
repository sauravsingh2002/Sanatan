<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;




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
    return view('login');
});

Route::get('/login',[LoginController::class,'login']);
Route::get('/forgotpassword',[LoginController::class,'forgotpassword']);
Route::get('/rigester',[LoginController::class,'rigester']);
Route::post('/signup',[LoginController::class,'signup']);




