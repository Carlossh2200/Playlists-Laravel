<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[PagesController::class,'index']);

Route::get('/login',[PagesController::class,'login']);

Route::get('/addSong',[PagesController::class,'addSong']);

Route::get('/signup',[PagesController::class,'signup']);

Route::get('/managePlaylist',[PagesController::class,'managePlaylist']);

Route::get('/about',[PagesController::class,'about']);



Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
