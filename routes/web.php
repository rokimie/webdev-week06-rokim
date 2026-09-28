<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    $skills = [
        'Laravel Routing',
        'Blade Layouts & Components',
        'PHP Fundamentals',
    ];

    return view('pages.about', ['skills' => $skills]);
});

Route::get('/contact', function () {
    return view('pages.contact');
});
