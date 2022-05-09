<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\InterventionController;
use App\Http\Controllers\UserController;
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
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'authenticate'])->name('login.custom');

Route::group(['middleware' => ['auth']], function () {

Route::get('products', [productController::class, 'index'])->name('products');
Route::post('create-product', [productController::class, 'store'])->name('product.store');
Route::post('delete-product', [productController::class, 'delete'])->name('product.delete');
Route::post('update-product', [productController::class, 'update'])->name('product.update');


Route::get('commande', [CommandeController::class, 'index'])->name('commande.list');
Route::get('commande-update', [CommandeController::class, 'update'])->name('commande.update');

Route::get('intervention', [InterventionController::class, 'index'])->name('intervention.list');
Route::post('intervention-update', [InterventionController::class, 'update'])->name('intervention.update');

Route::get('users', [UserController::class, 'index'])->name('users.list');




Route::get('/', function () {
    return redirect('products');
})->name('home');

});
