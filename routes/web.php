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
Route::view('/portfolio', 'pages.portfolio');
Route::view('/contact', 'pages.contact');
Route::view('/makeup-service', 'pages.makeup-service');
Route::view('/salon-service', 'pages.salon-service');
Route::view('/groom-service', 'pages.man-service');
Route::view('/hair-service', 'pages.hair-service');
Route::view('/nail-service', 'pages.nail-service');
Route::view('/eye-lash-extension', 'pages.eye-lash-extension');