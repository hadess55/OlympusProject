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
Route::get('/admin', function () {
    return view('admin.beranda');
});
Route::get('/adminproject', function () {
    return view('admin.project');
});
Route::get('/adminpricing', function () {
    return view('admin.pricing');
});
Route::get('/admininbox', function () {
    return view('admin.inbox');
});
