<?php

use Illuminate\Support\Facades\Route;

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