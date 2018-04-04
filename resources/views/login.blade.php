<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMS</title>

    
    <!-- CSS Files-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}"/>
   
    <!-- JS Files-->
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>

</head>
    <body>      
        <form action="login" method="post" id="loginform" name="loginform" class="form-horizontal">
           <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" </input>
            <div class="container">
                <h3>Login </h3>
                <div class="role" id="role">
                    <label>Role</label>
                    <input type="radio" name="role"  value="Admin">Admin
                    <input type="radio" name="role" value="Student">Student
                    <input type="radio" name="role"  value="Teacher">Teacher
                    <input type="radio" name="role"  value="Parent">Parents
                </div>
                <div class="email">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control"  placeholder="Email ID" >
                </div>
                <div class="password">
        		      <label>Password</label>
        		      <input type="password" name="password" id="password" class="form-control"  placeholder="Password" >
                </div>
                <div class="button">
                    <button type="submit" id="login" class="btn btn-primary">Submit</button>
                </div> 
            </div>
        </form>
    </body>
    
<script>
 $(document).ready(function() {
    $("#loginform").validate({
        rules: {
            role :"required",
             email: {
                required: true,
                email: true
            },
             password: {
                required: true,
                minlength: 6
            },
            messages: {
                role:{
                    required:"Please select your role",
                },
                email:{
                    required:"Please enter a valid email address",
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 6 characters long"
                },
            }
        }
    });
 });
    </script>
</html>