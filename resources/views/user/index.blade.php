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
        <h4>Student Details</h4>
        
 

            <div class="additem">
                <a href="{{url('/user/create')}}" class='btn btn-info'> <span class="glyphicon glyphicon-plus"></span>Add New </a>
            </div>
            
        <div class="table">
            <table class="table" id="table_id">
               <thead class="table-heading">
                    <th>ID</th>
                    <th>Username</th>
                    <!--<th>Password</th>-->
                    <th>Type</th>
                    <th>First Name</th>  
                    <th>Last Name</th>
                    <th>Email ID</th>
                    <th>Mobile Number</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Pincode</th>
                    <th>Access Mapping ID</th>
                    <th>Action</th>   
                </thead>
            
            @foreach($userList as $list)   
               <tbody>
                   <tr>                   
                        <td>{{$list['user_id']}}</td>
                        <td>{{$list['username']}}</td>
<!--                        <td>{{$list['password']}}</td>-->
                        <td>{{$list['type']}}</td>
                        <td>{{$list['first_name']}}</td>
                        <td>{{$list['last_name']}}</td>
                        <td>{{$list['email_address']}}</td>
                        <td>{{$list['mobile_number']}}</td>
                        <td>{{$list['address_line_1']}}</td>
                        <td>{{$list['address_line_2']}}</td>
                        <td>{{$list['pincode']}}</td>
                        <td>{{$list['access_level_mapping_id']}}</td>
                        <td>  
                            <a href ='{{url("/user/{$list->user_id}")}}'> 
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
        
          
 <!--Modal-Delete-->
<div class="modal fade" id="modal-delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Student Details</h4>
            </div>
            <div class="modal-body">    
                <div class="form-group">
                    <label>Are, You Sure Want to Delete this details..???</label>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{url('/user',$list->user_id)}}" method="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token()?>"/>
                        {{method_field('DELETE')}}
                        <input type='submit' class="btn btn-success" value="Ok"/>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
                </form>
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal" onclick="alert('Data Deleted..!!');"> Ok</button>-->
            </div>
        </div>
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