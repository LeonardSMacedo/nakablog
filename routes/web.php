<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;

Route::get('/', function () {
    return view('index');
});

Route::resource('artigos', ArtigoController::class);