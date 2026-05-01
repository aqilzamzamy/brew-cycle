<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/kemitraan', function () {
    return view('partner');
})->name('partner.index');