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
        <h4>Subject Paper Details</h4>
             <form method="post" action="{{url('/subjectpaperdetails')}}" name='subject_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
            <div class="form-group">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
                <label> Name </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required />
            </div>
            <div class="form-group">
                <label>Paper Code </label>
                <input type="text" class="form-control" name="paperCode" id="paperCode" placeholder="Enter paperCode" required />
            </div>
            <div class="form-group">
                <label>Description </label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Description" required />
            </div>
            <div class="form-group">
                <label>Semester </label>
                <input type="text" class="form-control" name="semester" id="semester" placeholder="semester" required />
            </div>
            <div class="form-group">
                <label>Credit </label>
                <input type="text" class="form-control" name="credit" id="credit_score" placeholder="credit_score" required />
            </div> 
                    
            <input type="submit" class="btn btn-success" value="Create"/>
       </form>
        
        
       </div>
        
    </body>
    </html>