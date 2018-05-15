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
            <form method="POST" action="{{action('SubjectPaperDetailsController@update',$list->subject_paper_details_id)}}" name='paper_details' id='form_id'>
                @csrf
        @method('PUT')
    
            
            @if ($errors->any())
            <div class="alert alert-success alert-block">
                 <button type="button" class="close" data-dismiss="alert">×</button>	
                <ul>
                    <strong>Warning</strong>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$list['name']}}">
            </div>
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->

           
            <div class="form-group">
                <label>Paper Code </label>
                <input type="text" class="form-control" name="paperCode" id="paper_code"  required  value="{{$list['paper_code']}}"/>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" id="description"  required value="{{$list['description']}}"/>
            </div>
            <div class="form-group">
                <label>Semester </label>
                <input type="text" class="form-control" name="semester" id="semester"  required value="{{$list['semester']}}"/>
            </div>
            <div class="form-group">
                <label>Credit Score </label>
                <input type="text" class="form-control" name="credit" id="credit_score"  required value="{{$list['credit_score']}}"/>
            </div>

            <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
</html>