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
          <h3>Edit Parent details</h3>
            <form method="POST" action="{{action('ParentDetailsController@update',$parentList->parent_id)}}" name='parent_details' id='form_id'>
                @csrf
                @method('PUT')
            
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

              <div class="form-group">
                <label>Parent ID </label>
                <input type="text" class="form-control" name="parent_id" id="parent_id" value="{{$parentList['parent_id']}}">
            </div>
                           
                    <!--            <div class="panel-heading">Staff Details</div>-->

           
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name"  required  value="{{$parentList['first_name']}}" pattern="^[A-Za-z]*$"/>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name"  required value="{{$parentList['last_name']}}" pattern="^[A-Za-z]*$"/>
            </div>
                     <div class="form-group">
                <label>Relationship</label>
                <input type="text" class="form-control" name="relationship" id="relationship"  required value="{{$parentList['relationship']}}" pattern="^[A-Za-z]*$"/>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender" id="gender"  required value="{{$parentList['gender']}}"/>
            </div>
            <div class="form-group">
                <label>D.O.B.</label>
                <input type="text" class="form-control" name="dob" id="dob"  required value="{{$parentList['dob']}}"/>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" id="address"  required value="{{$parentList['address']}}" pattern="^[A-Za-z0-9 .,]*$"/>
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input type="text" class="form-control" name="email_id" id="email_id"  required value="{{$parentList['email_id']}}" pattern="^[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,4}$"/>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contact_number" id="contact_number"  required value="{{$parentList['contact_number']}}" pattern="^\d{10}$"/>
            </div>

            <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
    
<script>
  $( function() {
    $( "#dob" ).datepicker();
  } );
</script>
</html>