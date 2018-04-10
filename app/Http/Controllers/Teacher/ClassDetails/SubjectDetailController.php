<?php

namespace App\Http\Controllers\Teacher\ClassDetails;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SubjectDetailController extends Controller
{
    public $id;
    public $subject;
    public $noOfClasses;
    public $teacherid;
        
    //Declaring the table to be used
    public $tableName = 'teacher_subject_details';
    public $tableDependent = 'teacher_data';
        
    public function __construct()
    {
        // $this->middleware('SubjectDetail');//Name of the middleware as given in kernel.php
    }
    
    public function addSubjectData(Request $request)
    {
        $this->subject= $request->subject;
        $this->noOfClasses = $request->noOfClasses;
        $this->teacherid = $request->teacherid; 
        
        $this->subject= 'Maths';
        $this->noOfClasses = 5;
        $this->teacherid = 2; 
        
        //Checks whether the tacher exists in the teacher data table, it inserts only if the data present
        $data_exist = \DB::table($this->tableName)->where('teacherid',$this->teacherid)->doesntExist();
        $teacherExist = \DB::table($this->tableDependent)->where('id',$this->teacherid)->exists();
        if($teacherExist)
        {
           if($data_exist)
            {
                $this->id = \DB::table($this->tableName)->insertGetId(['subject'=>$this->subject,'noofclasses'=>$this->noOfClasses,'teacherid'=>$this->teacherid]);
                echo "The subject data has been inserted with the id ".$this->id;
            }
            else
            {
                echo 'The subject data for the teacher already exists, please update using id';
            }        
        }
        else
        {
            echo 'The teacher doesnot exist';
        }
        
        
    }
    
    public function updateSubjectData(Request $request)
    {
        $this->id = $request->id;
        $this->subject= $request->subject;
        $this->noOfClasses = $request->noOfClasses;
        $this->teacherid = $request->teacherid;  
        
        $this->id = 1;
        $this->subject= 'Physics';
        $this->noOfClasses = 3;
        $this->teacherid = 2;  
        
        //it updates only if the base table and child table id matches
        $id_present = \DB::table($this->tableName)
                ->where([
                        ['id', '=', $this->id],
                        ['teacherid', '=', $this->teacherid],
                    ])->exists();
        
        if($id_present)
        {
            \DB::table($this->tableName)->where('id',$this->id)->update(['subject'=>$this->subject,'noofclasses'=>$this->noOfClasses,'teacherid'=>$this->teacherid]);
        
            echo "The subject data with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The subject data does not Exist or invalid subject id/teacher id';
        }
        
    }
    
    public function viewSubjectData()
    {
        $subjectDataList = \DB::table($this->tableName)->select('id','subject','noOfClasses','teacherid')->get();
              
       if($subjectDataList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $subjectDataList = json_encode($subjectDataList);
           echo $subjectDataList;
       }
        
    }
    
    public function deleteSubjectData(Request $request)
    {
        //$this->id = $request->id;
        
        $this->id = 1;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
            echo 'The subject data with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The subject data does not exist or invalid subject id';
        }
    }
}
