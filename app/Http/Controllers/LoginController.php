<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Declares the middleware and calls it
    public function __construct()
    {
        $this->middleware('Login');
    }
    
    //Based on the user input details it validates
    public function login( Request $request) 
    {
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;
        
        if($role == 'Admin')
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
        elseif ($role == 'Teacher')
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
        elseif ($role == 'Student')
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
        elseif($role == 'Parent')
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
