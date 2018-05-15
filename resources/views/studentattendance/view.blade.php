<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
          <h3>Edit Student details</h3>
           <form method="POST" action="{{action('StudentAttendanceController@update',$attendanceList->student_id)}}" name='course_details' id='form_id'>
          @csrf
        @method('PUT')
      
            <div class="form-group">
                <label>Student ID </label>
                <input type="text" class="form-control" name="student_id" id="student_id" value="{{$attendanceList['student_id']}}" readonly>
            </div>
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->
          
              <div class="form-group">
                <label>Semester </label>
                <input type="text" class="form-control" name="semester" id="semester" value="{{$attendanceList['semester']}}" required  />
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" class="form-control" name="date" id="date" value="{{$attendanceList['date']}}" required />
            </div> 
                     <div class="form-group">
                <label>Hour 1 </label>
                <input type="text" class="form-control" name="hour1" id="hour1" value="{{$attendanceList['hour1']}}" required />
            </div>
            <div class="form-group">
                <label>Hour 2 </label>
                <input type="text" class="form-control" name="hour2" id="hour2" value="{{$attendanceList['hour2']}}" required />
            </div>
             <div class="form-group">
                <label>Hour 3 </label>
                <input type="text" class="form-control" name="hour3" id="hour3" value="{{$attendanceList['hour3']}}" required />
            </div>
            <div class="form-group">
                <label>Hour 4 </label>
                <input type="text" class="form-control" name="hour4" id="hour4" value="{{$attendanceList['hour4']}}" required />
            </div>
             <div class="form-group">
                <label>Hour 5 </label>
                <input type="text" class="form-control" name="hour5" id="hour5" value="{{$attendanceList['hour5']}}" required />
            </div>
             <div class="form-group">
                <label>Hour 6 </label>
                <input type="text" class="form-control" name="hour6" id="hour6" value="{{$attendanceList['hour6']}}" required />
            </div>
             <div class="form-group">
                <label>Hour 7 </label>
                <input type="text" class="form-control" name="hour7" id="hour7" value="{{$attendanceList['hour7']}}" required />
            </div>
            
                    <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
</html>