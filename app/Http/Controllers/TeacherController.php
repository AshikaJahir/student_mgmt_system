<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public $id;
    public $firstname;
    public $lastname;
    public $gender;
    public $contact; 
    
    //Declaring the table to be used
    public $tableName = 'teacher_data';
    
    public function __construct()
    {
        //$this->middleware('Teacher');//Name of the middleware as given in kernel.php
    }
    
    public function addTeacherData(Request $request)
    {
        /*$this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->gender = $request->gender;
        $this->contact = $request->contact;*/
        
        $this->firstname = 'Ashika';
        $this->lastname = 'Jahir';
        $this->gender = 'Female';
        $this->contact = '9632563259';  
               
        
        $this->id = \DB::table($this->tableName)->insertGetId(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'gender' => $this->gender,
             'contact'=>$this->contact]);
        
        echo "Teacher ". $this->firstname." has been inserted with the id ".$this->id;
    }
    
    public function updateTeacherData(Request $request)
    {
       /* $this->id = $request->id;
        $this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->gender = $request->gender;
        $this->contact = $request->contact; */
        
        $this->id = 2;
        $this->firstname = 'Ashika';
        $this->lastname = 'J';
        $this->gender = 'Male';
        $this->contact = '9632563259';
        
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {
            \DB::table($this->tableName)->where('id',$this->id)->update(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'gender' => $this->gender,
             'contact'=>$this->contact]);
        
            echo "The teacher with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The teacher data does not Exist or invalid id';
        }
        
    }
    
    public function viewTeacherData()
    {
        $teacherList = \DB::table($this->tableName)->select('id','firstname','lastname','gender','contact')->get();        
        
       if($teacherList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $teacherList = json_encode($teacherList);
           echo $teacherList;
       }
        
    }
    
    public function deleteTeacherData(Request $request)
    {
        //$this->id = $request->id;
        
            $this->id = 1;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
            echo 'The teacher with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The teacher data does not exist or invalid id';
        }
    }
}
