<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('first'));
Route::get('/second', fn () => view('second'));
