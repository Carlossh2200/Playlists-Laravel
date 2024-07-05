<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/',[PagesController::class,'index']);

Route::get('/login',[PagesController::class,'login']);

Route::get('/addSong',[PagesController::class,'addSong']);

Route::get('/signup',[PagesController::class,'signup']);

Route::get('/managePlaylist',[PagesController::class,'managePlaylist']);


