<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function ()
{
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contactus');
});
Route::get('/loan', function () {
    return view('loan');
});
Route::get('/loan-calculator', function () {
    return view('loancalculator');
});
Route::get('/loan-eligibility', function () {
    return view('loaneligibility');
});

