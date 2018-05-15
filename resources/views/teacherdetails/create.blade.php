<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">   
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
  
        
        <style>
            .form-control{
                width:300px;
            }
            .container{
                padding:80px;
            }
            h4{
              margin-left: 180px;
              margin-top: 50px;
                font-family: Calibri;
                color: red;
                font-size: 28px;
            }
           </style>
    </head>
    <body>
        <div class="container">
        <h4>Teacher Details</h4>
            <form method="post" action="{{url('/teacherdetails')}}" name='parent_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
           
         
<!--            <div class="form-group">
                   <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label>Parent ID </label>
                <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Enter Course ID">
            </div>-->
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->

           
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name"  required  placeholder="Enter Parent Name"/>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name"  required placeholder="Enter Last Name"/>
              </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender" id="gender"  required placeholder="Enter Gender"/>
            </div>
            <div class="form-group">
                <label>D.O.B.</label>
                <input type="text" class="form-control" name="dob" id="dob"  required placeholder="Enter D.O.B."/>
            </div>
              
            <div class="form-group">
                <label>Marital Status</label>
                <input type="text" class="form-control" name="marital_status" id="marital_status"  required placeholder="Enter Marital Status"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" id="address"  required placeholder="Enter Address"/>
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input type="text" class="form-control" name="email_id" id="email_id"  required placeholder="Enter Email ID"/>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contact_number" id="contact_number"  required placeholder="Enter Contact Number"/>
            </div>
            
            <input type="submit" class="btn btn-success" value="Create">
       </form>
        
       </div>
        
    </body>
        
<script>
  $(function() {
    $("#dob").datepicker({
        dateFormat:"yy-mm-dd"
    });
  
  });
</script>
    </html>