<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

require __DIR__.'/auth.php';
