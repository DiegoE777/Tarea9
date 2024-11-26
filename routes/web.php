<?php

use App\Http\Controllers\MenuController;  // Asegúrate de importar el controlador

Route::get('/', [MenuController::class, 'home'])->name('home');
Route::get('/photos', [MenuController::class, 'photos'])->name('photos');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');

