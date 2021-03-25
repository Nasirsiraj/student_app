<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// student resource route
Route::resource(
    '/student',
    'App\Http\Controllers\StudentController');

