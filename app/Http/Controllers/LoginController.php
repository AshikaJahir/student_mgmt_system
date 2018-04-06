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
    
    //Declare the variable for storing table name
    public $tableName;
    
    //Declare the variable for storing redirecting page
    public $redirectPage;
    
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
        
        //Based on the role it selects the table
        if($role == $this->roleAdmin)
        {
            $this->tableName = 'admin_details';
            $this->redirectPage = '';
        }elseif ($role == $this->roleTeacher)
        {
            $this->tableName = 'teacher_details';
            $this->redirectPage = '';
        }elseif ($role == $this->roleStudent)
        {
            $this->tableName = 'Student_details';
            $this->redirectPage = '';
        }elseif($role == $this->roleParent)
        {
            $this->tableName = 'Parent_details';
            $this->redirectPage = '';
        }
        
        $user = \DB::table($this->tableName)->where('email',$email)->first();
            if(isset($user))
            {
                if(password_verify($password, $user->password))
                {
                    $request->session()->put('role',$role);                    
                    //return redirect($this->redirectPage)->with('status', ' you are logged in'); //to send a flash message 
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
