<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//A.NAVIGATION TO VIEWS 
//A1. Page to be displayed when the user enters the application
Route::get('/', function () {
    return view('welcome');
});

//A2. Navigating to register page
Route::get('register', function () {
    return view('register');
});


//B.NAVIGATION TO MIDDLWARES AND CONTROLLERS
//B1.Navigating to register middleware and controller, post registering
Route::post('register','RegisterController@register');