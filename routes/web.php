<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/generic', function () {
    return view('generic');
});

Route::get('/servicesblade', function () {
    return view('servicesblade');
});

Route::get('/single', function () {
    return view('single');
});