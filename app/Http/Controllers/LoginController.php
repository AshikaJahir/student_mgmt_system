<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Declaring roles
    public $roleParent = 'Parent';
    public $roleTeacher = 'Teacher';
    public $roleAdmin = 'Admin';
    public $roleStudent = 'Student';
    
    //Declares the middleware and calls it
    public function __construct()
    {
        $this->middleware('Login');//Name of the middleware as given in kernel.php
    }
    
    //Based on the user input details it validates
    public function login( Request $request) 
    {
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
        
        if($role == $this->roleAdmin)
        {
            $user = \DB::table('admin_details')->where('email',$email)->first();
            if(isset($user))
            {
                if(password_verify($password, $user->password))
                {
                   // return redirect('')->with('status', ' you are logged in'); //to send a flash message 
                    echo 'Access Granted';
                }
                else
                {
                    echo 'Password is incorrect';
                }
            }
            else
            {
                echo 'Email does not exist';
            }
        }
        elseif ($role == $this->roleTeacher)
        {
            $user = \DB::table('teacher_details')->where('email',$email)->first();
            if(isset($user))
            {
                if(password_verify($password, $user->password))
                {
                    echo 'Access Granted';
                }
                else
                {
                    echo 'Password is incorrect';
                }
            }
            else
            {
                echo 'Email does not exist';
            }
        }
        elseif ($role == $this->roleStudent)
        {
            $user = \DB::table('student_details')->where('email',$email)->first();
            if(isset($user))
            {
                if(password_verify($password, $user->password))
                {
                    echo 'Access Granted';
                }
                else
                {
                    echo 'Password is incorrect';
                }
            }
            else
            {
                echo 'Email does not exist';
            }
        }
        elseif($role == $this->roleParent)
        {
            $user = \DB::table('parent_details')->where('email',$email)->first();
            if(isset($user))
            {
                if(password_verify($password, $user->password))
                {
                    echo 'Access Granted';
                }
                else
                {
                    echo 'Password is incorrect';
                }
            }
            else
            {
                echo 'Email does not exist';
            }
        }
    }
}
