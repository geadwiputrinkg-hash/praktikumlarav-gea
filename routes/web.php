<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/reports', function () {
    return view('reports');
});