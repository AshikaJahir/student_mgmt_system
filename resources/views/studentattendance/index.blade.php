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
        
        <!--Scripts for datatables-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.jqueryui.min.js"></script>
 
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.jqueryui.min.css"/>

 
        <style>
            .icon-action{
                height: 20px;
                padding-right: 18px;
                margin-top: 0px;
            }
            .delete_button{
                margin-left: 60px;
                margin-top: -35px;
            }
            .glyphicon{
                padding-right: 10px;
            }
           
            h4{
                font-family: Times New Roman;
                font-size: 24px;
                color:#b70e4d;
                margin-left: 110px;
            }
            .additem{
                text-align: right;
                padding-bottom: 20px;
            }
            .modal .btn-success{
                margin-left: 130px;
            }
        </style>
        
    </head>
    <body>
        <h4>Student Attendance Details</h4>
        <div class="container"><br><br>
 

            <div class="additem">
                <a href="{{url('/studentattendance/create')}}" class='btn btn-info'> <span class="glyphicon glyphicon-plus"></span>Add New </a>
            </div>
            
        <div class="table">
            <table class="table" id="table_id">
               <thead class="table-heading">
                    <th>ID</th>
                    <th>Semester</th>
                    <th>Date</th>
                    <th>Hour 1</th>
                    <th>Hour 2</th>  
                    <th>Hour 3</th>
                    <th>Hour 4</th>
                    <th>Hour 5</th>
                    <th>Hour 6</th>
                    <th>Hour 7</th>
                    <th>Action</th>   
                </thead>
            
            @foreach($attendanceList as $attendance)   
               <tbody>
                   <tr>                   
                        <td>{{$attendance['student_id']}}</td>
                        <td>{{$attendance['semester']}}</td>
                        <td>{{$attendance['date']}}</td>
                        <td>{{$attendance['hour1']}}</td>
                        <td>{{$attendance['hour2']}}</td>
                        <td>{{$attendance['hour3']}}</td>
                        <td>{{$attendance['hour4']}}</td>
                        <td>{{$attendance['hour5']}}</td>
                        <td>{{$attendance['hour6']}}</td>
                        <td>{{$attendance['hour7']}}</td>                       
                        <td>  
                            <a href ='{{url("/studentattendance/{$attendance->student_id}")}}'> 
                                <input type="submit" class="btn btn-primary" value="Edit"/>
                            </a>                        
                            <div class='delete_button'>        
                                <input type='submit' class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" value="Delete"/>
                                    <!--<td><a href ='{{url("/coursedetails/{$list->course_details_id}/delete")}}'>Delete</a></td>-->
                            </div>       
                        </td>         
                    </tr>              
                </tbody>
            @endforeach           
            </table>   
        </div>
    </div>
        
 
       
    </body>
    
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#table_id').DataTable();
    
        $('div.alert').delay(3000).slideUp(200); //success-alert
    });
   </script>
</html>