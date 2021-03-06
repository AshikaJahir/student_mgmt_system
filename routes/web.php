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
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('email', function () {
    return view('adminator.email');
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
        
        //For Subject info
        //B28.Navigating to  Subject middleware and controller for adding 
        Route::any('addSubject','SubjectDetailController@addSubjectData');
        //B29.Navigating to  Subject middleware and controller for updating 
        Route::any('updateSubject','SubjectDetailController@updateSubjectData');
        //B30.Navigating to  Subject middleware and controller for viewing 
        Route::any('viewSubject','SubjectDetailController@viewSubjectData');
        //B31.Navigating to  Class middleware and controller for deleting 
        Route::any('deleteSubject','SubjectDetailController@deleteSubjectData');        
        
     });
     
     //For PTA Sub module
     Route::group(['namespace' => '\PTA'], function(){    
        //For PTA Meeting info 
        //B32.Navigating to PTA Meeting middleware and controller for adding 
        Route::any('addPTAMeeting','PTAMeetingController@addPTAData');
        //B33.Navigating to PTA Meeting middleware and controller for updating 
        Route::any('updatePTAMeeting','PTAMeetingController@updatePTAData');
        //B34.Navigating to PTA Meeting middleware and controller for viewing 
        Route::any('viewPTAMeeting','PTAMeetingController@viewPTAData');
        //B35.Navigating to  PTA Meeting middleware and controller for deleting 
        Route::any('deletePTAMeeting','PTAMeetingController@deletePTAData');
     });
    
});


//After the modification of db
//For course_details
Route::resource('coursedetails', 'CourseDetailsController');
Route::post('coursedetails/create','CourseDetailsController@store')->middleware('CourseDetails');
Route::put('coursedetails/{id}/edit','CourseDetailsController@update')->middleware('CourseDetails');
Route::DELETE('coursedetails/{id}/delete','CourseDetailsController@destroy');

//For student_details
Route::resource('studentdetails', 'StudentDetailsController');
Route::post('studentdetails/create','StudentDetailsController@store')->middleware('StudentDetails');
Route::put('studentdetails/{id}/edit','StudentDetailsController@update')->middleware('StudentDetails');
Route::DELETE('studentdetails/{id}/delete','StudentDetailsController@destroy');

//For student_attendance
Route::resource('studentattendance', 'StudentAttendanceController');
Route::post('studentattendance/create','StudentAttendanceController@store')->middleware('StudentAttendance');
Route::put('studentattendance/{id}/edit','StudentAttendanceController@update')->middleware('StudentAttendance');
Route::DELETE('studentattendance/{id}/delete','StudentAttendanceController@destroy');

//For student_subject_paper_mapping
Route::resource('studentsubjectpaper', 'StudentSubjectPaperMappingController');
Route::post('studentsubjectpaper/create','StudentSubjectPaperMapping@store')->middleware('StudentSubject');
Route::put('studentsubjectpaper/{id}/edit','StudentSubjectPaperMapping@update')->middleware('StudentSubject');
Route::DELETE('studentsubjectpaper/{id}/delete','StudentSubjectPaperMapping@destroy');

//For subject_paper_details
Route::resource('subjectpaperdetails', 'SubjectPaperDetailsController');
Route::post('subjectpaperdetails/create','SubjectPaperDetails@store')->middleware('SubjectPaper');
Route::put('subjectpaperdetails/{id}/edit','SubjectPaperDetails@update')->middleware('SubjectPaper');
Route::DELETE('subjectpaperdetails/{id}/delete','SubjectPaperDetails@destroy');

//For user
Route::resource('user', 'UserController');
Route::post('user/create','UserController@store')->middleware('User');
Route::put('user/{id}/edit','UserController@update')->middleware('User');
Route::DELETE('user/{id}/delete','UserController@destroy');

//For joint queries and manuplation of send data
Route::get('activity','ActivityController@join');