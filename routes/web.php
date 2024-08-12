<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/',[PagesController::class,'index']);

Route::get('/login',[PagesController::class,'login']);

Route::get('/addSong',[PagesController::class,'addSong']);

Route::get('/signup',[PagesController::class,'signup']);

Route::get('/managePlaylist',[PagesController::class,'managePlaylist']);

Route::get('/about',[PagesController::class,'about']);

Route::get('/home', [HomeController::class, 'index'])->name('home');





Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
Route::resource('posts','App\Http\Controllers\PostsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
