<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    //table name
    protected $table = 'course_details';
    
    //Primary Key
    public $primaryKey = 'course_details_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
