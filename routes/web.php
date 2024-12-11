<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Root route (GET for the login page and POST for form submission)
Route::get('/', function () {
    return view('signin'); // Replace 'signin' with your login Blade view name
});
Route::post('/', [AuthController::class, 'signin']);

// Other static views
Route::get('/adduser', function () {
    return view('add-user');
});
Route::get('/users', function () {
    return view('userslist');
});
Route::get('/cases', function () {
    return view('cases');
});
Route::get('/caseview', function () {
    return view('caseview');
});
Route::get('/userindex', function () {
    return view('userindex');
});
Route::get('/usercaseview', function () {
    return view('usercaseview');
});

// Authentication routes (optional, if needed for other parts)
Auth::routes();

// Home route
Route::get('/home', [HomeController::class, 'index'])->name('home');
