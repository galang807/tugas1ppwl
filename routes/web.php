<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\ProgramStudiController;

Route::get('/', [CampusController::class, 'beranda'])
    ->name('beranda');

Route::get('/program-studi', [ProgramStudiController::class, 'index'])
    ->name('program.studi');

Route::get('/kontak', [CampusController::class, 'kontak'])
    ->name('kontak');