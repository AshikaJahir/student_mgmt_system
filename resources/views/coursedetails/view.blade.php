<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMS</title>

       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <style>
            .form-control{
                width:400px;
            }
            textarea{
                resize: none;
            }
/*            #description input{
                height:50px;
            }*/
        </style>
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

          <h3>Edit course details</h3>
            <form method="POST" action="{{action('CourseDetailsController@update',$courseList->course_details_id)}}" name='course_details' id='form_id'>
           @csrf
        @method('PUT')
            
           
            <div class="form-group">
                
                <label>Course Name </label>
                <input type="text" class="form-control" name="course_name" id="course_name" value="{{$courseList['course_name']}}" required pattern="[A-Za-z ]*$">
                       
            </div>
            <div class="form-group">
                <label>Course Code </label>
                <input type="text" class="form-control" name="course_code" id="course_code" value="{{$courseList['course_code']}}" required pattern="^[A-Z]{2}[0-9]{3}$" >
            </div>
            <div class="form-group" id="description">
                <label>Description </label>
                <!--<textarea class="form-control" rows="5" name="description" id="description" value="{{$courseList['description']}}"></textarea>-->
                <input type="text" class="form-control" name="description" id="description" value="{{$courseList['description']}}" required pattern="^[A-Za-z .]*$">
            
            </div>

            <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
</html>