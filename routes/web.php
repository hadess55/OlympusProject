<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contaq', function () {
    return view('contaq');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/pricing', function () {
    return view('pricing');
});
