<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/test', function () {
    return 'Laravel OK - ' . config('app.env');
});