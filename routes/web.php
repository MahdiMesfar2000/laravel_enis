<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/hello/{name}/{age}/{gender?}', [HomeController::class, 'hello'])->name('home.hello');
