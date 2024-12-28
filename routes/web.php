<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about-us', function ()
{
    return view('about');
});
Route::get('/contact-us', function () {
    return view('contact');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/loan-calculator', function () {
    return view('loancalculator');
});
Route::get('/loan-eligibility', function () {
    return view('loaneligibility');
});
Route::post('/contact-message', [ContactController::class, 'store'])->name('contact-message');
