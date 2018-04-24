<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccessLevelMapping extends Model
{
    //table name
    protected $table = 'user_access_level_mapping';
    
    //Primary Key
    public $primaryKey = 'user_access_level_mapping_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
