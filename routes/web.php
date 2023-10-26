<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\CustomRegistration;

Route::get('/', [Registration::class, 'landingPage']);
Route::get('/registration', [Registration::class, 'showRegistrationForm'])->name('registration.show');
Route::post('/registration', [Registration::class, 'submitRegistration'])->name('registration.submit');
Route::post('/register', [CustomRegistration::class, 'register'])->name('registration.register');

