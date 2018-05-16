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

          <h3>Edit Mark details</h3>
            <form method="POST" action="{{action('MarkDetailsController@update',$markdetails->mark_details_id)}}" name='course_details' id='form_id'>
           @csrf
        @method('PUT')
                

              <div class="form-group">
                <label>Course Code</label>
                <input type="text" class="form-control" name="course_code" id="course_code" value="{{$markdetails['course_code']}}" readonly>
            </div>
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->

           
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" id="description"  required  value="{{$markdetails['description']}}" readonly/>
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="type" id="type"  required value="{{$markdetails['type']}}"/>
            </div>
                     <div class="form-group">
                <label>Exam Date</label>
                <input type="text" class="form-control" name="exam_date" id="exam_date"  required value="{{$markdetails['exam_date']}}"/>
            </div>
            <div class="form-group">
                <label>Marks Obtained </label>
                <input type="text" class="form-control" name="marks_obtained" id="marks_obtained"  required value="{{$markdetails['marks_obtained']}}"/>
            </div>
             <div class="form-group">
                <label>Grade</label>
                <input type="text" class="form-control" name="grade" id="grade"  required value="{{$markdetails['grade']}}"/>
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name="status" id="status"  required value="{{$markdetails['status']}}"/>
            </div>
            <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" name="remarks" id="remarks"  required value="{{$markdetails['remarks']}}"/>
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