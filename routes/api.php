<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\interventionController;
use App\http\Controllers\CommandeController;
Route::POST('/register' , [registerController::class ,'Register']);
Route::POST('/login' , [loginController::class ,'Login']);
Route::POST('/CreateProduit',[ProduitController::class,'createProduit']);
Route::PUT('/UpdateProduit/{id}',[ProduitController::class,'UpdateProduit']);
Route::delete('/DeleteProduit/{id}',[ProduitController::class,'DeleteProduit']);
Route::GET('/afficherProduits',[ProduitController::class,'index']);



Route::group(['middleware' => ['auth:sanctum']] , function() {
    Route::POST('/interventionPost' , [interventionController::class ,'createIntervention']);
    Route::GET('/interventionList' , [interventionController::class ,'interventionsList']);
    Route::GET('/getproduct' , [CommandeController::class ,'Getproducts']);
    Route::POST('/commandePost' , [CommandeController::class ,'CommandePost']);


});
