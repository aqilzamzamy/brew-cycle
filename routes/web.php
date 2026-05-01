<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/kemitraan', function () {
    return view('pages.partner');
})->name('partner.index');

Route::get('/partner', function () {
    return view('pages.partner2');
})->name('partner.form');