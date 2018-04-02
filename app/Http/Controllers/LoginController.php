<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('Login');
    }
    
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
                    echo 'Access Granted';
                }
                else
                {
                    echo 'Password is incorrect';
                }
            }
            else
            {
                echo 'Email doesnot exixt';
            }
        }
        elseif ($role == 'Teacher')
        {
            
        }
        elseif ($role == 'Student')
        {
            
        }
        elseif($role == 'Parent')
        {
            
        }
    }
}
