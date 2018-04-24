<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    //table name
    protected $table = 'student_details';
    
    //Primary Key
    public $primaryKey = 'student_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
