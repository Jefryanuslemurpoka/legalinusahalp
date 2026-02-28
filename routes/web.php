<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

Route::get('/test', function () {
    try {
        return 'Laravel OK - ' . config('app.env');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return $e->getMessage();
    }
});

Route::get('/', function () {
    try {
        return view('landing.index');
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return $e->getMessage();
    }
});