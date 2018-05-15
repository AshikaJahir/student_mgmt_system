<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubjectPaperMapping extends Model
{
    //table name
//    protected $table = 'student_subject_paper_mapping';
   
    protected $table = 'studentsubjectpapermapping';
   
    //Primary Key
   public $primaryKey = 'student_subject_paper_mapping_id';
   
//     public $primaryKey = 'subject_mapping_id';
   
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
