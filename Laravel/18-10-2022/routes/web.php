<?php

use App\Http\Controllers\catagory;
use App\Http\Controllers\productController;
use App\Http\Controllers\SubcatagoryController;
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
Route::post("/profile/profilePicChange", [usersController::class, "profilePicChange"])->name("profilePicChange");




//catagory Section

Route::get("/catagory",[catagory::class,"catagoryPage"])->name("catagoryPage");
Route::post("/catagory/catagotyStore", [catagory::class, "catagoryInsert"])->name("catagoryInsert");
Route::get("/catagory/catagoryDelete/{categoryId}", [catagory::class, "catagoryDelete"])->name("catagoryDelete");
Route::get("/catagory/catagoryEditPage/{categoryId}", [catagory::class, "catagoryEditPage"])->name("catagoryEditPage");
Route::post("/catagory/catagotyUpdate", [catagory::class, "catagotyUpdate"])->name("catagotyUpdate");

//catagory Trash bin

Route::get("/catagory_trash_bin", [catagory::class, "catagory_trash_bin"])->name("catagory_trash_bin");
Route::get("/catagory_trash_bin/category_restore/{category_trash_id}", [catagory::class, "category_restore"])->name("category_restore");
Route::get("/catagory_trash_bin/category_Parmanant_delete/{category_trash_id}", [catagory::class, "category_Parmanant_delete"])->name("category_Parmanant_delete");



//Sub-category Section

Route::get("/SubcatagoryPage", [SubcatagoryController::class, "SubcatagoryPage"])->name("SubcatagoryPage");
Route::post("/Subcatagory/SubcatagotyStore", [SubcatagoryController::class, "SubcatagoryInsert"])->name("SubcatagoryInsert");



//Product Section


Route::get("/productPage",[productController::class, "productPage"])->name("productPage");
Route::post("/ProductPageCatESubInfo",[productController::class, "ProductPageCatESubInfo"]);
Route::post("/ProductPage/productInsert",[productController::class, "productInsert"])->name("productInsert");
