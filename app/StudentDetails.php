<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    //table name
    protected $table = 'studentdetails';
    
    //Primary Key
    public $primaryKey = 'student_details_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
