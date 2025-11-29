<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/skills', function () {
    return view('pages.skills');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/academic', function () {
    return view('pages.academic');
});

Route::get('/achievements', function () {
    return view('pages.achievements');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/skills/store', [SkillController::class, 'store'])->name('skills.store');
Route::delete('/skills/delete/{id}', [SkillController::class, 'destroy'])->name('skills.destroy');