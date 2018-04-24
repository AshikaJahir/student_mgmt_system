<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectPaperDetails extends Model
{
    //table name
    protected $table = 'subject_paper_details';
    
    //Primary Key
    public $primaryKey = 'subject_paper_details_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
