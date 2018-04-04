<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPwdController extends Controller
{
    //Declaring roles
    public $roleParent = 'Parent';
    public $roleTeacher = 'Teacher';
    public $roleAdmin = 'Admin';
    public $roleStudent = 'Student';
    
    //Declare the variable for storing table name
    public $tableName;
    
    //Declares the middleware and calls it
    public function __construct()
    {
        //$this->middleware('ForgotPwd');//Name of the middleware as given in kernel.php
    }
    
    //Based on the role it checks the table and update the new password
    public function updatePassword( Request $request) 
    {
       /* $email = $request->email;
        $newPassword = $request->newPassword;
        $role = $request->role;*/
        
        $email = 'priya@nwizara.com';
        $newPassword = 'priya';
        $role = 'Admin';
        
        $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
        //Based on the role it selects the table
        if($role == $this->roleAdmin)
        {
            $this->tableName = 'admin_details';
        }elseif ($role == $this->roleTeacher)
        {
            $this->tableName = 'teacher_details';
        }elseif ($role == $this->roleStudent)
        {
            $this->tableName = 'Student_details';
        }elseif($role == $this->roleParent)
        {
            $this->tableName = 'Parent_details';
        }
        
        //Check the presence of email, if present it updates the password else warn the user
         $email_exist = \DB::table($this->tableName)->where('email',$email)->exists();         
         if($email_exist)
           {
              \DB::table($this->tableName)->where('email', $email)->update(['password' => $newPassword]);
              //return redirect('')->with('status', ' you password has been changed'); //to send a flash message 
              echo 'The password has been changed';
           }
           else
           {
              echo 'Email does not exist';
           }
            
        
    }
}
