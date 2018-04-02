<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Declaring middleware to use 
    public function __construct()
    {
        $this->middleware('Register');
    }
    
    public function register(Request $request)
    {
            
    }
}
