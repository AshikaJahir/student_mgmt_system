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
        
       
        
    </head>
<body>
    <div class="container">
        <h3>Show Details</h3>
                 <div class="content">
                        <label>Course Name : {{$courseList['course_name']}}</label>
                    </div>
                    <div class="content">
                        <label>Course Code : {{$courseList['course_code']}}</label>
                    </div>
                    <div class="content">
                        <label>Course Description : {{$courseList['description']}} </label>
                    </div>
            
        </form>
    </div>
       
   
</body>
    
<!--<script type="text/javascript">
   $(document).ready(function() {
    var table = $('#table_id').DataTable();
 
    $('#table_id').on( 'click', 'tr', function () {
       if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }       
    } );
//      $('#table_id tbody').on('click', 'tr', function () {
////           $(this).toggleClass('selected');
//        var data = table.row( this ).data();
//        alert( 'You clicked on '+data[0]+data[1]+data[2]+'\'s row' );
//    } );   
//   $('#table_id').on( 'click', 'tr', function () {
//        var tr = $(this).closest("tr");
//        var rowindex = tr.index();
//            alert(rowindex);
//    });
});
</script>
    -->
</html>