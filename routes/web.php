<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/sign-in', 'pages.sign-in')->name('sign-in');