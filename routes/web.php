<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectInfoController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;

// Home Page
Route::get('/', [ProjectInfoController::class, 'home'])->name('home');

// Skills Page
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

// Projects Pages
Route::get('/projects', [ProjectInfoController::class, 'index'])->name('projects');
Route::get('/projects/{project}', [ProjectInfoController::class, 'show'])->name('projects.show');

// Academic Page
Route::get('/academic', [ProjectInfoController::class, 'academic'])->name('academic');

// Achievements Page
Route::get('/achievements', [ProjectInfoController::class, 'achievements'])->name('achievements');

// About Page
Route::get('/about', [ProjectInfoController::class, 'about'])->name('about');

// Contact Pages
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');