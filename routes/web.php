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

//B3.Navigating to ForgotPwd middleware and controller 
Route::any('forgotPassword','ForgotPwdController@updatePassword');

//For Student Module
Route::group(['namespace' => '\Student'], function(){
    
    //For Admission Sub module
    Route::group(['namespace' => '\Admission'], function(){    
        //For student Basic info 
        //B4.Navigating to Student middleware and controller for adding 
        Route::any('addStudent','StudentController@addStudentData');
        //B5.Navigating to Student middleware and controller for updating 
        Route::any('updateStudent','StudentController@updateStudentData');
        //B6.Navigating to Student middleware and controller for viewing 
        Route::any('viewStudent','StudentController@viewStudentData');
        //B7.Navigating to Student middleware and controller for deleting 
        Route::any('deleteStudent','StudentController@deleteStudentData');
        
        //For Transport Sub Module
        //B16.Navigating to Transport data middleware and controller for adding 
        Route::any('addTransport','TransportDataController@addTransportData');
        //B17.Navigating to Transport data middleware and controller for updating 
        Route::any('updateTransport','TransportDataController@updateTransportData');
        //B18.Navigating to Transport data middleware and controller for viewing 
        Route::any('viewTransport','TransportDataController@viewTransportData');
        //B19.Navigating to Transport data middleware and controller for deleting 
        Route::any('deleteTransport','TransportDataController@deleteTransportData');

        //For Fee Sub Module
        //B20.Navigating to Fee data middleware and controller for adding 
        Route::any('addFee','FeeDataController@addFeeData');
        //B21.Navigating to Fee data middleware and controller for updating 
        Route::any('updateFee','FeeDataController@updateFeeData');
        //B22.Navigating to Fee data middleware and controller for viewing 
        Route::any('viewFee','FeeDataController@viewFeeData');
        //B23.Navigating to Fee data middleware and controller for deleting 
        Route::any('deleteFee','FeeDataController@deleteFeeData');
    });
    
    //For Class Sub module
    Route::group(['namespace' => '\ClassData'], function(){    
        //For student Class info 
        //B24.Navigating to Student Class middleware and controller for adding 
        Route::any('addClassData','ClassDetailController@addClassData');
        //B25.Navigating to Student Class middleware and controller for updating 
        Route::any('updateClassData','ClassDetailController@updateClassData');
        //B26.Navigating to Student Class middleware and controller for viewing 
        Route::any('viewClassData','ClassDetailController@viewClassData');
        //B27.Navigating to Student Class middleware and controller for deleting 
        Route::any('deleteClassData','ClassDetailController@deleteClassData');
     });
     
 });
     
//For Admin Module
Route::group(['namespace' => '\Admin'], function(){
        //B8.Navigating to Admin middleware and controller for adding 
        Route::any('addAdmin','AdminController@addAdminData');
        //B9.Navigating to Admin middleware and controller for updating 
        Route::any('updateAdmin','AdminController@updateAdminData');
        //B10.Navigating to Admin middleware and controller for viewing 
        Route::any('viewAdmin','AdminController@viewAdminData');
        //B11.Navigating to Admin middleware and controller for deleting 
        Route::any('deleteAdmin','AdminController@deleteAdminData');
});

//For Parent Module
Route::group(['namespace' => '\Parent'], function(){
        //B12.Navigating to Parent middleware and controller for adding 
        Route::any('addParent','ParentController@addParentData');
        //B13.Navigating to Parent middleware and controller for updating 
        Route::any('updateParent','ParentController@updateParentData');
        //B14.Navigating to Parent middleware and controller for viewing 
        Route::any('viewParent','ParentController@viewParentData');
        //B15.Navigating to Parent middleware and controller for deleting 
        Route::any('deleteParent','ParentController@deleteParentData');
});
//For Teacher Module
Route::group(['namespace' => '\Teacher'], function(){
    
    //For Recruitment sub module
    Route::group(['namespace' => '\Recruitment'], function(){
        //B12.Navigating to Teacher middleware and controller for adding 
        Route::any('addTeacher','TeacherController@addTeacherData');
        //B13.Navigating to Teacher middleware and controller for updating 
        Route::any('updateTeacher','TeacherController@updateTeacherData');
        //B14.Navigating to Teacher middleware and controller for viewing 
        Route::any('viewTeacher','TeacherController@viewTeacherData');
        //B15.Navigating to Teacher middleware and controller for deleting 
        Route::any('deleteTeacher','TeacherController@deleteTeacherData');
    });
    
    //For Class Details Sub module
    Route::group(['namespace' => '\ClassDetails'], function(){    
        //For student Class info 
        //B28.Navigating to  Class middleware and controller for adding 
        Route::any('addClass','ClassDetailController@addClassData');
        //B29.Navigating to  Class middleware and controller for updating 
        Route::any('updateClass','ClassDetailController@updateClassData');
        //B30.Navigating to  Class middleware and controller for viewing 
        Route::any('viewClass','ClassDetailController@viewClassData');
        //B31.Navigating to  Class middleware and controller for deleting 
        Route::any('deleteClass','ClassDetailController@deleteClassData');
     });
    
});
