<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
Route::middleware('auth')->group(function(){
    Route::get('/',[HomeController::class,'home'] );
});
Route::get("/login",[LoginController::class,'page'])->name('login');
Route::post("/login/auth",[LoginController::class,'store'])->name('login_store');
