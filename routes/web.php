<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/wordpress', function () {
    return view('projetWordpress');
});

Route::get('/rafp', function () {
    return view('projetRafp');
});

Route::get('/veille', function () {
    return view('veille');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/generic', function () {
    return view('generic');
});

Route::get('/competences', function () {
    return view('competences');
});

Route::get('/single', function () {
    return view('single');
});