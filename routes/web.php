<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tentang-blog', function () {
    return view('about');
})->name('about');

Route::get('/hubungi-kami', function () {
    return view('contact');
})->name('contact');

Route::get('/blog-posts', function () {
    return view('blog.index');
})->name('blog.index');
