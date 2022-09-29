<?php

use App\Http\Controllers\usersController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/userView",[usersController::class,"userViewFun"])->name("userViewPage");

Route::get("/user/userDelete/{user_id}",[usersController::class,"userDeleteFunction"])->name("userDeletePage");
Route::get("/profile",[usersController::class,"profilePage"])->name("profilePage");
Route::post("/profile/nameChange", [usersController::class, "profileNameUpdate"])->name("profileNameUpdate");
Route::post("/profile/PasswordChange", [usersController::class, "profilePasswordUpdate"])->name("profilePasswordUpdate");
