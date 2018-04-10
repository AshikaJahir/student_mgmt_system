<?php

namespace App\Http\Controllers\Teacher\ClassDetails;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClassDetailController extends Controller
{
    public $id;
    public $std;
    public $physics;
    public $chemistry;
    public $maths; 
    
    //Declaring the table to be used
    public $tableName = 'teacher_class_details';
        
    public function __construct()
    {
        //$this->middleware('TeacherClassDetail');//Name of the middleware as given in kernel.php
    }
    
    public function addClassData(Request $request)
    {
        $this->std= $request->std;
        $this->physics = $request->physics;
        $this->chemistry = $request->chemistry;
        $this->maths = $request->maths;     
        
        $this->std= 12;
        $this->physics = 'Mrs.Rani';
        $this->chemistry = 'Mrs.Molly';
        $this->maths = 'Mrs.Sophiya';     
        
        $this->id = \DB::table($this->tableName)->insertGetId(['std'=>$this->std,'physics'=>$this->physics,
                            'chemistry'=>$this->chemistry,'maths'=>$this->maths]);
        echo "The class data for has been inserted with the id ".$this->id;         
             
    }
    
    public function updateClassData(Request $request)
    {
        $this->id = $request->id;
        $this->std= $request->std;
        $this->physics = $request->physics;
        $this->chemistry = $request->chemistry;
        $this->maths = $request->maths;  
        
        $this->id = 1;
        $this->std= 12;
        $this->physics = 'Mrs.Mary';
        $this->chemistry = 'Mrs.Molly';
        $this->maths = 'Mrs.Sophiya';
        
        //it updates only if the data is present
        $id_present = \DB::table($this->tableName)
                ->where('id', '=', $this->id)->exists();        
        if($id_present)
        {
            \DB::table($this->tableName)->where('id',$this->id)->update(['std'=>$this->std,'physics'=>$this->physics,
                            'chemistry'=>$this->chemistry,'maths'=>$this->maths]);
        
            echo "The class data with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The class data does not Exist or invalid id';
        }
        
    }
    
    public function viewClassData()
    {
        $classDataList = \DB::table($this->tableName)->select('id','std','physics','chemistry','maths')->get();
              
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
        //$this->id = $request->id;
        
        $this->id = 1;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
            echo 'The classdata data with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The class data does not exist or invalid id';
        }
    }
}
