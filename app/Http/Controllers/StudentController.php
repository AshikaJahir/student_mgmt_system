<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public $id;
    public $firstname;
    public $lastname;
    public $fathername;
    public $class;
    public $contact;      
    //Declaring the table to be used
    public $tableName = 'student_data';
    public $tableDependent = 'student_transport_data';
    public $tableDependent2 = 'student_fee_data';
    
    public function __construct()
    {
        //$this->middleware('Student');//Name of the middleware as given in kernel.php
    }
    
    public function addStudentData(Request $request)
    {
        /*$this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->fathername = $request->fathername;
        $this->class = $request->class;
        $this->contact = $request->contact;*/
        
        $this->firstname = 'Ashika';
        $this->lastname = 'Jahir';
        $this->fathername = 'Jahir Hussain';
        $this->class = '12';
        $this->contact = '9632563259';  
               
        
        $this->id = \DB::table($this->tableName)->insertGetId(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'fathername' => $this->fathername,
            'class'=>$this->class, 'contact'=>$this->contact]);
        
        //to insert in student_transport_data table
        //$tid=\DB::table($this->tableDependent)->insertGetId(['studentid'=> $this->id]);        
        //echo 'In transport table a row is created storing student id '.$this->id . 'with its transport id as '.$tid; ;
        
        //to insert in student_fee_data table
       // $fid=\DB::table($this->tableDependent2)->insertGetId(['studentid'=> $this->id]);        
        //echo 'In fee data table a row is created storing student id '.$this->id . 'with its fee id as '.$fid; ;
        
        echo '<br>';
        echo "The student ". $this->firstname." has been inserted with the id ".$this->id;
    }
    
    public function updateStudentData(Request $request)
    {
       /* $this->id = $request->id;
        $this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->fathername = $request->fathername;
        $this->class = $request->class;
        $this->contact = $request->contact; */
        
        $this->id = 3;
        $this->firstname = 'Ashika';
        $this->lastname = 'J';
        $this->fathername = 'Jahir Hussain';
        $this->class = '10';
        $this->contact = '9632563259';
        
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {
            \DB::table($this->tableName)->where('id',$this->id)->update(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'fathername' => $this->fathername,
            'class'=>$this->class, 'contact'=>$this->contact]);
        
            echo "The student with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The studentdata does not Exist or invalid id';
        }
        
    }
    
    public function viewStudentData()
    {
        $studentList = \DB::table($this->tableName)->select('id','firstname','lastname','fathername','class','contact')->get();
        
        
       if($studentList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $studentList = json_encode($studentList);
           echo $studentList;
       }
        
    }
    
    public function deleteStudentData(Request $request)
    {
        //$this->id = $request->id;
        
            $this->id = 3;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table('$this->tableName')->where('id', '=', $this->id)->delete();
            echo 'The student with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The student data does not exist or invalid id';
        }
    }
}
