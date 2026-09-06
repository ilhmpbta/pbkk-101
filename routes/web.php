<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HitungController;


// Welcome
Route::get('/', [PageController::class, 'home'])->name('home');

// Profil singkat Departemen Teknik Informatika ITS
Route::get('/about', [PageController::class, 'about'])->name('about');

// Final Project Idea - Agentic AI
Route::get('/project-idea', [PageController::class, 'projectIdea'])->name('project-idea');

// Hitung bilangan1, bilangan2. operasi dengan hasil "Hasil dari $number1 $operation $number2 adalah $result"
Route::get('/hitung/{number1}/{number2}/{operation}', [HitungController::class, 'hitung']);
