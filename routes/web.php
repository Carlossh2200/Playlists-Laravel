<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', fn () => view('pages.index'));

Route::prefix('songs')->group(function () {
    Route::resource('song', SongController::class);
});

Route::get('/login',[PagesController::class,'login']);
Route::get('/signup',[PagesController::class,'signup']);


