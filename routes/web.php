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

//A3. Navigating to login page
Route::get('login', function () {
    return view('login');
});


//B.NAVIGATION TO MIDDLWARES AND CONTROLLERS
//B1.Navigating to register middleware and controller, post registering
Route::post('register','RegisterController@register');

//B2.Navigating to login middleware and controller, post logging
Route::post('login','LoginController@login');

//B3.Navigating to Student middleware and controller for adding the student data
Route::any('addStudent','StudentController@addStudentData');

//B4.Navigating to Student middleware and controller for updating the student data
Route::any('updateStudent','StudentController@updateStudentData');

//B5.Navigating to Student middleware and controller for viewing the student data
Route::any('viewStudent','StudentController@viewStudentData');

//B6.Navigating to Student middleware and controller for deleting the student data
Route::any('deleteStudent','StudentController@deleteStudentData');