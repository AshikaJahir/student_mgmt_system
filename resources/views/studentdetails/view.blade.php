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
  
    </head>
    <body>
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <strong>Warning</strong>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        
                </ul>
            </div>
            @endif

          <h3>Edit Student details</h3>
            <form method="POST" action="{{action('StudentDetailsController@update',$studentList->student_details_id)}}" name='course_details' id='form_id'>
           @csrf
        @method('PUT')
                

              <div class="form-group">
                <label>Course ID </label>
                <input type="text" class="form-control" name="courseid" id="courseid" value="{{$studentList['course_details_id']}}" readonly>
            </div>
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->

           
            <div class="form-group">
                <label>User id </label>
                <input type="text" class="form-control" name="userid" id="userid"  required  value="{{$studentList['user_id']}}" readonly/>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contact" id="contact"  required value="{{$studentList['contact_info']}}"/>
            </div>
                     <div class="form-group">
                <label>Year Of Join </label>
                <input type="text" class="form-control" name="yearOfJoin" id="yearOfJoin"  required value="{{$studentList['year_of_joining']}}"/>
            </div>
            <div class="form-group">
                <label>Year Of Passout </label>
                <input type="text" class="form-control" name="yearOfPassout" id="yearOfPassout"  required value="{{$studentList['year_of_passout']}}"/>
            </div>

            <input type="submit" class="btn btn-success" value="Update"/>
        
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