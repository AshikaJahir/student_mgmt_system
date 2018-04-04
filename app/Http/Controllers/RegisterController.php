<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Declaring roles
    public $roleParent = 'Parent';
    public $roleTeacher = 'Teacher';
    public $roleAdmin = 'Admin';
    public $roleStudent = 'Student';
    
    //Declare the variable for storing table name
    public $tableName;
    
    //Declaring which middleware to use and call them 
    public function __construct()
    {
        $this->middleware('Register');//Name of the middleware as given in kernel.php
    }
    
    //Based on the role mentioned by the user, this function registers them on their corresponding table
    public function register(Request $request)
    {
            $firstname = $request->firstname;
            $lastname = $request->lastname;
            $email = $request->email;
            $password = $request->password;
            $role = $request->role;
            
            //Hashing the password
            $password = password_hash($password, PASSWORD_DEFAULT);
            
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
         
        //Email is given as unique. So if already prsent insert query will not run.
        $email_present = \DB::table($this->tableName)->where('email',$email)->exists();
        if(!$email_present)
        {
           $id = \DB::table($this->tableName)->insertGetId(['firstname' => $firstname , 'lastname'=> $lastname , 'email' => $email , 'password' => $password]);
        }
        else
        {
           echo 'Email Already Registered';
           exit;
        }
                          
        echo  $firstname." with role ". $role ." has been inserted with the id ".$id;
            
    }
}
