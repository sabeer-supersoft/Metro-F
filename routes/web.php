<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\UserHomeController;

Route::get('/', function () {
    return view('index');
});
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
