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
            <form method="post" action="{{url('/studentattendance')}}" name='student_attendance' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label>Student ID </label>
                <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Enter Student ID" required>
            </div>
         
            <div class="form-group">
                <label>Semester </label>
                <input type="text" class="form-control" name="semester" id="semester" placeholder="Enter Semester" required  />
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" class="form-control" name="date" id="date" placeholder="Enter Date" required />
            </div>
                     <div class="form-group">
                <label>Hour 1 </label>
                <input type="text" class="form-control" name="hour1" id="hour1" placeholder="Hour 1" required />
            </div>
            <div class="form-group">
                <label>Hour 2 </label>
                <input type="text" class="form-control" name="hour2" id="hour2" placeholder="hour2" required />
            </div>
             <div class="form-group">
                <label>Hour 3 </label>
                <input type="text" class="form-control" name="hour3" id="hour3" placeholder="hour3" required />
            </div>
            <div class="form-group">
                <label>Hour 4 </label>
                <input type="text" class="form-control" name="hour4" id="hour4" placeholder="hour4" required />
            </div>
             <div class="form-group">
                <label>Hour 5 </label>
                <input type="text" class="form-control" name="hour5" id="hour5" placeholder="hour5" required />
            </div>
             <div class="form-group">
                <label>Hour 6 </label>
                <input type="text" class="form-control" name="hour6" id="hour6" placeholder="hour6" required />
            </div>
             <div class="form-group">
                <label>Hour 7 </label>
                <input type="text" class="form-control" name="hour7" id="hour7" placeholder="hour7" required />
            </div>
            
            <input type="submit" class="btn btn-success" value="Create">
       </form>
        
    </div>
        
    </body>
    </html>