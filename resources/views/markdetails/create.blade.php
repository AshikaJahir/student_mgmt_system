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
            <form method="post" action="{{url('/markdetails')}}" name='mark_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label>Course Code </label>
                <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" required>
            </div>
         
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" required  />
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Enter Type" required />
            </div>
            <div class="form-group">
                <label>Exam Date</label>
                <input type="text" class="form-control" name="exam_date" id="exam_date" placeholder="Enter Exam Date" required />
            </div>
            <div class="form-group">
                <label>Marks Obtained </label>
                <input type="text" class="form-control" name="marks_obtained" id="marks_obtained" placeholder="Enter Marks Obtained" required />
            </div>
            <div class="form-group">
                <label>Grade </label>
                <input type="text" class="form-control" name="grade" id="grade" placeholder="Enter Grade" required />
            </div>
            <div class="form-group">
                <label>Status </label>
                <input type="text" class="form-control" name="status" id="status" placeholder="Enter Status" required />
            </div>
            <div class="form-group">
                <label>Remarks </label>
                <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Enter Remaarks" required />
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