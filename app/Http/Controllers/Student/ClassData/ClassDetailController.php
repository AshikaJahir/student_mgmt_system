<?php

namespace App\Http\Controllers\Student\ClassData;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClassDetailController extends Controller
{
    public $rollno;
    public $std;
    public $classTeacher;
    public $noOfSubjects;
    public $studentid; 
    
    //Declaring the table to be used
    public $tableName = 'student_class_details';
    public $tableDependent = 'student_data';
        
    public function __construct()
    {
        //$this->middleware('ClassDetail');//Name of the middleware as given in kernel.php
    }
    
    public function addClassData(Request $request)
    {
        $this->std= $request->std;
        $this->classTeacher = $request->classTeacher;
        $this->noOfSubjects = $request->noOfSubjects;
        $this->studentid = $request->studentid;
        
        $this->std= 8;
        $this->classTeacher = 'Anu';
        $this->noOfSubjects = 10;
        $this->studentid = 9;
         
        //Checks whether the student exists in the student data table, it inserts only if the data present
        $data_exist = \DB::table($this->tableName)->where('studentid',$this->studentid)->doesntExist();
        $studentExist = \DB::table($this->tableDependent)->where('id',$this->studentid)->exists();
        if($studentExist)
        {
           if($data_exist)
            {
                $this->rollno = \DB::table($this->tableName)->insertGetId(['std'=>$this->std, 'classteacher'=>$this->classTeacher,
                                    'noofsubjects'=>$this->noOfSubjects,'studentid'=>$this->studentid]);
                echo "The class data for the student has been inserted with the id ".$this->rollno;
            }
            else
            {
                echo 'The class data for the student already exists, please update using roll no';
            }        
        }
        else
        {
            echo 'The student doesnot exist';
        }
        
        
    }
    
    public function updateClassData(Request $request)
    {
        $this->rollno = $request->rollno;
        $this->std= $request->std;
        $this->classTeacher = $request->classTeacher;
        $this->noOfSubjects = $request->noOfSubjects;
        $this->studentid = $request->studentid;
        
        $this->rollno = 1;
        $this->std= 9;
        $this->classTeacher = 'Revathi';
        $this->noOfSubjects = 11;
        $this->studentid = 9;
        
        //it updates only if the base table and child table id matches
        $rollno_present = \DB::table($this->tableName)
                ->where([
                        ['rollno', '=', $this->rollno],
                        ['studentid', '=', $this->studentid],
                    ])->exists();
        
        if($rollno_present)
        {
            \DB::table($this->tableName)->where('rollno',$this->rollno)->update(['std'=>$this->std, 'classteacher'=>$this->classTeacher,
                                    'noofsubjects'=>$this->noOfSubjects,'studentid'=>$this->studentid]);
        
            echo "The class data with rollno ". $this->rollno." has been updated successfully";
        }
        else
        {
            echo 'The class data does not Exist or invalid rollno/student id';
        }
        
    }
    
    public function viewClassData()
    {
        $classDataList = \DB::table($this->tableName)->select('rollno','std','classteacher','noofsubjects','studentid')->get();
              
       if($classDataList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $classDataList = json_encode($classDataList);
           echo $classDataList;
       }
        
    }
    
    public function deleteClassData(Request $request)
    {
        //$this->rollno = $request->rollno;
        
        $this->rollno = 5;
            
        $rollno_present = \DB::table($this->tableName)->where('rollno',$this->rollno)->exists();
        if($rollno_present)
        {        
            \DB::table($this->tableName)->where('rollno', '=', $this->rollno)->delete();
            echo 'The classdata data with rollno ' .$this->rollno. ' has been deleted successfully';
        }
        else
        {
            echo 'The class data does not exist or invalid rollno';
        }
    }
}
