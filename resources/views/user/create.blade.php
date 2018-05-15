<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            h4{
                font-family: calbri;
                font-size: 24px;
                color:red;
                text-align: center;
            }
            .form-control{
                width:250px;
            }
            .user_contact_details{
                margin-left: 600px;
                margin-top: -445px;
            }
            .user-details{
                margin-left: 165px;
                margin-top: 50px;
            }
            .btn-success{
                margin-top: 145px;
                margin-left: 885px;
            }
        </style>
    </head>
    <body>
   
        <h4>User Details</h4>
         
        <form method="post" action="{{url('/user')}}" name='user' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
   
    <div class="container">
        <div class="user-details">            
           <div class="form-group">
               <label>Type </label>
                <select class="form-control" name="type" id="type">
                     <option value="NA">Select Role</option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="STUDENT">STUDENT</option>
                    <option value="STAFF">STAFF</option>
                    <option value="PARENT">PARENTS</option>
                </select>
<!--                
                <input type="text" class="form-control" name="type" id="type" placeholder="Type" required />-->
            </div> 

<!--            <div class="form-group">
                <label>Access Mapping Id </label>
                <input type="text" class="form-control" name="accessMappingId" id="accessMappingId" placeholder="Access Level Mapping ID" required />
            </div> -->
                    
            <div class="form-group">
                <label> Username </label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required />
            </div>
            <div class="form-group">
                <label>Password </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password " required  />
            </div>
                   
            <div class="form-group">
                <label>First Name </label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required />
            </div>
            
            <div class="form-group">
                <label>Last Name </label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required />
            </div>
                        
            <div class="form-group">
                <label>Email ID </label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email ID" required />
            </div>  

        </div>
                    
        <div class="user_contact_details">
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required />
            </div>  
             
               
            <div class="form-group">
                <label>Address Line 1 </label>
                <input type="text" class="form-control" name="addressLine1" id="addressLine1" placeholder="Address 1" required />
            </div>  
            
            <div class="form-group">
                <label>Address Line 2 </label>
                <input type="text" class="form-control" name="addressLine2" id="addressLine2" placeholder="Address 2" required />
            </div>  
                    
            <div class="form-group">
                <label>Pincode </label>
                <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Pincode" required />
            </div>  
            
        </div>  
   </div>         
                
              <input type="submit" class="btn btn-success" value="Create">
       </form>
        
       
        
    </body>
    </html>