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
        
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
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
            textarea{
                resize: none;
            }
        </style>
       
    </head>
    <body>
        <h4>Create Course Details</h4>
        <div class="container">
            
            <form method="post" action="{{url('/studentsubjectpaper')}}" name='student_subject_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
                    <div class="form-group">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label>Type </label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="Enter Type" required>
                    </div>

                    <div class="form-group">
                        <label>Marks </label>
                        <!--<input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" required readonly="readonly">-->
                        <input type="text" class="form-control" name="marks" id="marks_attained" placeholder="Enter Marks" required>
                   
                    </div>
                    <div class="form-group">
                        <label>Semester </label>
                         
                        <input type="text" class="form-control" name="semester" id="semester" Placeholder="Semester" required>
                    </div>
                <input type="submit" class="btn btn-success" value="Create"/>
            </form>
 



    </body>
</html>