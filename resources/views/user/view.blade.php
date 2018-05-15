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
            <form method="POST" action="{{action('UserController@update',$userList->user_id)}}" name='user' id='form_id'>
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
                <label> Username </label>
                <input type="text" class="form-control" name="username" id="username" value="{{$userList['username']}}" required />
            </div>
            <div class="form-group">
                <label>Password </label>
                <input type="text" class="form-control" name="password" id="password" value="{{$userList['password']}}" required  />
            </div>
            <div class="form-group">
                  <label>Type </label>
                  <input type="text" class="form-control" name="type" id="type"  required value="{{$userList['type']}}" readonly="readonly"/>
            
                
            </div>
       <div class="form-group">
                <label>First Name </label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="{{$userList['first_name']}}" required />
            </div>
            <div class="form-group">
                <label>Last Name </label>
                <input type="text" class="form-control" name="lastName" id="lastName" value="{{$userList['last_name']}}" required />
            </div>  
                    <div class="form-group">
                <label>email ID </label>
                <input type="text" class="form-control" name="email" id="email" value="{{$userList['email_address']}}" required />
            </div>  
                    <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="mobile" id="mobile" value="{{$userList['mobile_number']}}" required />
            </div>  
             
               
              <div class="form-group">
                <label>Address Line 1 </label>
                <input type="text" class="form-control" name="addressLine1" id="addressLine1" value="{{$userList['address_line_1']}}" required />
            </div>  
                     <div class="form-group">
                <label>Address Line 2 </label>
                <input type="text" class="form-control" name="addressLine2" id="addressLine2" value="{{$userList['address_line_2']}}" required />
            </div>  
                    
                <div class="form-group">
                <label>Pincode </label>
                <input type="text" class="form-control" name="pincode" id="pincode" value="{{$userList['pincode']}}" required />
            </div>  
            
<!--            <div class="form-group">
                <label>Access Mapping Id </label>
                <input type="text" class="form-control" name="accessMappingId" id="accessMappingId" value="{{$userList['access_level_mapping_id']}}" required />
            </div>  -->
            
                

            <input type="submit" class="btn btn-success" value="Update"/>
        
        </form>
   
        </div>
      
     
    </body>
</html>