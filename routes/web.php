<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\ArchitectureController;

Route::get('/', [CampusController::class, 'beranda'])
    ->name('beranda');

Route::get('/program-studi', [ProgramStudiController::class, 'index'])
    ->name('program.studi');

Route::get('/kontak', [CampusController::class, 'kontak'])
    ->name('kontak');

Route::get('/architecture', [ArchitectureController::class, 'dashboard'])
    ->name('architecture');

Route::get('/lifecycle', [ArchitectureController::class, 'lifecycle'])
    ->name('lifecycle');

Route::get('/environment', [ArchitectureController::class, 'environment'])
    ->name('environment');