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
            
            <form method="post" action="{{url('/coursedetails')}}" name='course_details' id='form_id'>
                {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
          
                    <div class="form-group">
                        <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label>Course Name </label>
                        <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Enter Course Name" required pattern="^[A-Za-z ]*$">
                    </div>
<!--                    <label for="sel1">Course Name : </label>
                    <select class="form-control" id="course_name" name="course_name" required>
                        <option value="NA">Select Course</option>
                        <option value="Aeronautical Engineering" name="AE101">Aeronautical Engineering</option>
                        <option value="Civil Engineering" name="E254">Civil Engineering</option>
                        <option value="Computer Science and Engineering" name="CS104">Computer Science and Engineering</option>
                        <option value="Electrical and Electronics Engineering" name="EE105">Electrical and Electronics Engineering</option>
                        <option value="Electronics and Communication Engineering" name="EC106">Electronics and Communication Engineering</option>
                        <option value="Mechanical Engineering" name="ME114">Mechanical Engineering</option>
                        <option value="Information Technology" name="IT205">Information Technology</option>
                        <option value="Biomedical Engineering" name="BE121">Biomedical Engineering</option>
                        <option value="Electronics and Instrumentation Engineering" name="EI107">Electronics and Instrumentation Engineering</option>
                        <option value="Bio Technology" name="BTech214">Bio Technology</option>
                    </select>
                    </div>-->
                    <div class="form-group">
                        <label>Course Code </label>
                        <!--<input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" required readonly="readonly">-->
                        <input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" required pattern="^[A-Z]{2}[0-9]{3}$" title="Ex : XX123">
                   
                    </div>
                    <div class="form-group">
                        <label>Description </label>
                         <textarea class="form-control" rows="5" name="description" id="description" Placeholder="Description" required pattern="^[A-Za-z .]*$"></textarea>
                        <!--<input type="text" class="form-control" name="description" id="description" Placeholder="Description" required pattern="^[A-Za-z .]*$">-->
                    </div>
                <input type="submit" class="btn btn-success" value="Create"/>
            </form>
            
<!--            <div class="form-group">
                <label for="sel1">Course Name : </label>
                    <select class="form-control" id="code">
                        <option value="AE101">Aeronautical Engineering</option>
                        <option value="E254">Civil Engineering</option>
                        <option value="CS104">Computer Science and Engineering</option>
                        <option value="EE105">Electrical and Electronics Engineering</option>
                        <option value="EC106">Electronics and Communication Engineering</option>
                        <option value="ME114">Mechanical Engineering</option>
                        <option value="IT205">Information Technology</option>
                        <option value="BE121">Biomedical Engineering</option>
                        <option value="EI107">Electronics and Instrumentation Engineering</option>
                        <option value="BTech214">Bio Technology</option>
                    </select>
                </div>
            <div class="form-group">
                <label>Course Code </label>
                <input type="text" class="form-control" name="course_code" id="coursecode" placeholder="Enter Course Code" required pattern="^[A-Z0-9-]*$">
            </div>-->
<!--            <select id="course_code">
                <option value="America">America</option>
                <option value="Bangalore">Bangalore</option>
            </select>
            
            <input type="text" class="form-control" id="code">
        </div>
        
        <script type="text/javascript">-->
<!--//            $('select').on('change',function(){
////                alert(this.value);
//                $('#code').value=data.value;
//            })

    $('#course_code').change(function(){
        var code=$('#course_code').val();
        
        $('#code').val(code);
    });
        </script>-->


<!--this script tag is used : When you click course name dropdown box it sets the value in textbox -->
<script type="text/javascript">
    $(document).ready(function() {                                       
        $("#course_name").live("change", function() {
          $("#course_code").val($(this).find("option:selected").attr("name"));
        });
        $('#course_name option[name= ]').attr('selected','selected').change();
 });
 </script>

    </body>
</html>