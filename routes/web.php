<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\snack;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\contact;
use App\Http\Controllers\cartes;
use App\Http\Controllers\orders;



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

Route::get('/',[snack::class,"index"]);
Route::get("list",[snack::class,"list"]);
Route::get('login',[snack::class,"login"]);
Route::post("login",[usercontroller::class,"login"])->name('login');
Route::get('signup',[snack::class,"signup"]);
Route::get('contact',[snack::class,"contact"]);
Route::post('search',[snack::class,"search"])->name('search');
Route::post("signup",[usercontroller::class,"register"])->name('signup');
Route::post("contact",[contact::class,"contact"])->name('contact');
Route::get("logout",[usercontroller::class,"logout"]);
Route::get("profile",[snack::class,"profile"]);
Route::get("profile",[usercontroller::class,"user"]);
Route::get("about",[snack::class,"about"]);
Route::get("detail.{name}",[snack::class,"detail"]);
Route::get("categorie.{name}",[snack::class,"categorie"]);
Route::post("cart",[cartes::class,"cart"]);
Route::get("cartes",[cartes::class,"cartes"]);
Route::get("removecart.{cart_id}",[cartes::class,"removecart"]);
Route::get("order",[orders::class,"order"]);
Route::post("order",[orders::class,"order"]);
Route::get("forgot",[snack::class,"forgot"]);
Route::post("forgot",[usercontroller::class,"forgot"]);
Route::get("changepwd.{token}",[snack::class,"changepwd"]);
Route::post("changepwd.{token}",[usercontroller::class,"changepwd"]);
Route::get("verification.{token}",[snack::class,"verification"]);

















