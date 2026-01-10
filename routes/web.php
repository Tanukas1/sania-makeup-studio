<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'pages.index');
Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
Route::view('/services-details', 'pages.services-details');
Route::view('/academy', 'pages.academy');
Route::view('/gallery', 'pages.gallery');
Route::view('/contact', 'pages.contact');

