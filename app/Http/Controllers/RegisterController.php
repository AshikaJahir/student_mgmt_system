<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Declaring which middleware to use and call them 
    public function __construct()
    {
        $this->middleware('Register');
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
            
            //Email is given as unique. So if already prsent insert query will not run.
            if($role == 'Admin')
            {
                $email_present = \DB::table('admin_details')->where('email',$email)->first();
                if($email_present == null)
                {
                    $id = \DB::table('admin_details')->insertGetId(['firstname' => $firstname , 'lastname'=> $lastname , 'email' => $email , 'password' => $password]);
                }
                else
                {
                    echo 'Email Already Registered';
                    exit;
                }
            }
            elseif ($role == 'Teacher')
            {
                $email_present = \DB::table('teacher_details')->where('email',$email)->first();
                if($email_present == null)
                {
                    $id = \DB::table('teacher_details')->insertGetId(['firstname' => $firstname , 'lastname'=> $lastname , 'email' => $email , 'password' => $password]);
                }
                else
                {
                    echo 'Email Already Registered';
                    exit;
                }
            }
            elseif ($role == 'Student')
            {
                $email_present = \DB::table('student_details')->where('email',$email)->first();
                if($email_present == null)
                {
                    $id = \DB::table('student_details')->insertGetId(['firstname' => $firstname , 'lastname'=> $lastname , 'email' => $email , 'password' => $password]);
                }
                else
                {
                    echo 'Email Already Registered';
                    exit;
                }
            }
            elseif ($role == 'Parent')
            {
                $email_present = \DB::table('parent_details')->where('email',$email)->first();
                if($email_present == null)
                {
                    $id = \DB::table('parent_details')->insertGetId(['firstname' => $firstname , 'lastname'=> $lastname , 'email' => $email , 'password' => $password]);
                }
                else
                {
                    echo 'Email Already Registered';
                    exit;
                }
            }
            
             echo  $firstname." with role ". $role ." has been inserted with the id ".$id;
            
    }
}
