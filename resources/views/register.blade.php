<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}"/>
   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrapValidator.css"/>--
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    
    <!-- JS Files-->
     <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
 </head>
<body>
    <form method="post" action="register" id="registerform" name="registerform" class="form-horizontal">
         <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" </input>
           
        <div class="container">
        <h3> Register Form </h3>
          <div class="role">
            <label>Role</label>
                <input type="radio" name="role" id="role" value="Admin" >Admin
                <input type="radio" name="role" id="role" value="Student" >Student
                <input type="radio" name="role" id="role" value="Teacher" >Teacher
                <input type="radio" name="role" id="role" value="Parent" >Parents
            </div>
    		<div class="firstname">
        		<label>First Name</label>
        		<input type="text" name="firstname" id="firstname" class="form-control"  placeholder="First Name">
    		</div>
            
            <div class="lastname">
        		<label>Last Name</label>
        		<input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Last Name">
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
    		<button type="submit" id="submitbutton" class="btn btn-primary">Submit</button></div>
        </div>
    </form>
    
 <script>
    $(document).ready(function() {
    $("#registerform").validate({
        rules: {
            role :"required",
            firstname:{ 
                required:true
               /* regex: /^[a-zA-Z ]*$*/
            },
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            /*phone: {
                required: true,
                number: true
            },
            url: {
                required: false,
                url: true
            },
            username: {
                required: true,
                minlength: 6
            },*/
            password: {
                required: true,
                minlength: 6
            },
           /* confirm_password: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            agree: "required"*/
        },
        messages: {
            role:{
                required:"Please select your role",
            },
           firstname:{
               required:"Please enter your name",
               
           },
            lastname:{
                required:"Please enter your name",
            },
            email:{
                required:"Please enter a valid email address",
            },
            
           /* phone: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            /*url: {
                url: "Please enter valid url"
            },
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 6 characters"
            },*/
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
           /* confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
            },
            agree: "Please accept our policy"*/
        }
    });
       /* $("#submitbutton").click (function()  {
            var role= $('input[name=role]:checked').val();
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var email = $("#email").val();
			var password = $("#password").val();
			alert(" Role : " + role + " \n  First Name : " + firstname + " \n  Last Name : " + lastname + " \n Email : " + email + " \n Password : " + password + " \n  \n\n Form Submitted Successfully......");
		});*/
});
</script>
    </body>
</html>    