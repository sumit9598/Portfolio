<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
   return view('home');
});
Route::get('/home1',[UserController::class,'getUser']);
Route::get('about',[UserController::class,'getAbout']);
Route::get('contact',[UserController::class,'getContact']);
Route::get('name/{name}',[UserController::class,'getName']);
