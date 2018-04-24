<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //table name
    protected $table = 'user';
    
    //Primary Key
    public $primaryKey = 'user_id';
    
    //Timestamps
    public $timestamps = false; //if it is set to false , it will not include timetsmaps in db
}
