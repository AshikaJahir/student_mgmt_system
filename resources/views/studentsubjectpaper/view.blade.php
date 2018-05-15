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
            <form method="POST" action="{{action('StudentSubjectPaperMappingController@update',$list->student_subject_paper_mapping_id)}}" name='subject_paper_details' id='form_id'>
           @csrf
        @method('PUT')
            
          

            <div class="form-group">
                
                <label>Type </label>
                <input type="text" class="form-control" name="type" id="type" value="{{$list['type']}}">
            </div>
            <div class="form-group">
                <label>Marks </label>
                <input type="text" class="form-control" name="marks" id="marks_attained" value="{{$list['marks_attained']}}" >
            </div>
            <div class="form-group" id="description">
                <label>Semester </label>
                  <input type="text" class="form-control" name="semester" id="semester" value="{{$list['semester']}}">
            
            </div>

            <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
</html>