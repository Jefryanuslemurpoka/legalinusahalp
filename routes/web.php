<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return 'Laravel OK - ' . config('app.env');
});
