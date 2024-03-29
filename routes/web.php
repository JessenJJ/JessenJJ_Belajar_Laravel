<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


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
    return view('welcome');
});
Route::resource('/chat',ChatController::class);
Route::get("/", [HomeController::class,"home"]);
Route::get("login", [LoginController::class,"get"]);
Route::post("login", [LoginController::class,"post"]);
Route::get("/chat/delete/{chat}", [ChatController::class,"destroy"]);
Route::get("/login/logout", [LoginController::class,"destroy"]);


