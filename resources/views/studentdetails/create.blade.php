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
        <h4>Student Details</h4>
            <form method="post" action="{{url('/studentdetails')}}" name='student_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label>Course ID </label>
                <input type="text" class="form-control" name="courseid" id="courseid" placeholder="Enter Course ID" required>
            </div>
         
            <div class="form-group">
                <label>User id </label>
                <input type="text" class="form-control" name="userid" id="userid" placeholder="Enter User Id" required  />
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact Number" required pattern="^\d{10}*$"/>
            </div>
                     <div class="form-group">
                <label>Year Of Join </label>
                <input type="text" class="form-control" name="yearOfJoin" id="yearOfJoin" placeholder="Year Of Joining" required />
            </div>
            <div class="form-group">
                <label>Year Of Passout </label>
                <input type="text" class="form-control" name="yearOfPassout" id="yearOfPassout" placeholder="Year Of Passout" required />
            </div>
            
            <input type="submit" class="btn btn-success" value="Create">
       </form>
        
       </div>
        
    </body>
    
<script>
  $(function() {
    $("#yearOfJoin").datepicker({
        dateFormat:"yy-mm-dd"
    });
    $("#yearOfPassout").datepicker({
        dateFormat:"yy-mm-dd"
    });
  });
</script>
    
    </html>