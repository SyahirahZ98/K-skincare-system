<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\CartController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\PaymentController;

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

Route::get("/",[HomeController::class,"index"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deletemenu/{id}",[AdminController::class,"deletemenu"]);

Route::get("/productmenu",[AdminController::class,"productmenu"]);

Route::post("/uploadproduct",[AdminController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::get("/adminorder",[AdminController::class,"adminorder"]);

Route::get("/viewconsult",[AdminController::class,"viewconsult"]);

Route::post("/uploadconsult",[AdminController::class,"uploadconsult"]);

Route::get("/updateconsult/{id}",[AdminController::class,"updateconsult"]);

Route::post("/updatedataconsult/{id}",[AdminController::class,"updatedataconsult"]);

Route::get("/deleteconsult/{id}",[AdminController::class,"deleteconsult"]);

Route::get("/infoconsult",[HomeController::class,"infoconsult"]);

Route::get("/skincare",[HomeController::class,"skincare"]);

Route::get("/iunik",[HomeController::class,"iunik"]);
Route::get("/innisfree",[HomeController::class,"innisfree"]);
Route::get("/some",[HomeController::class,"somebymi"]);
Route::get("/illiyoon",[HomeController::class,"illiyoon"]);
Route::get("/cosrx",[HomeController::class,"cosrx"]);

Route::get("/body",[HomeController::class,"body"]);
Route::get("/drjarts",[HomeController::class,"drjarts"]);
Route::get("/innisfrees",[HomeController::class,"innisfrees"]);
Route::get("/somes",[HomeController::class,"somes"]);
Route::get("/illiyoons",[HomeController::class,"illiyoons"]);
Route::get("/pyunkangs",[HomeController::class,"pyunkangs"]);

Route::get("/order",[HomeController::class,"order"]);
Route::get("/vieworder/{id}",[HomeController::class,"vieworder"]);
Route::get("/deleteorder/{id}",[HomeController::class,"deleteorder"]);

//Route::post("/addtocart/{id}",[HomeController::class,"addtocart"]);

Route::post('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('payment', [PaymentController::class, 'payment']);

Route::post('showdetails', [PaymentController::class, 'showdetails']);


Route::get("/redirects",[HomeController::class,"redirects"]);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function()
 {
        return view('dashboard');
    })->name('dashboard');

