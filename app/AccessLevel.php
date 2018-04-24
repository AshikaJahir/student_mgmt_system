<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    //table name
    protected $table = 'access_level';
    
    //Primary Key
    public $primaryKey = 'access_level_id';
    
    //Timestamps
    public $timestamps = true; //if it is set to false , it will not include timetsmaps in db
}
