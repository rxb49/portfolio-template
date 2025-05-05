<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/veille', function () {
    return view('veille');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/competences', function () {
    return view('competences');
});

Route::get('/single', function () {
    return view('single');
});