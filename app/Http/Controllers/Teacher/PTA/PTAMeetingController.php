<?php

namespace App\Http\Controllers\Teacher\PTA;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PTAMeetingController extends Controller
{
    public $id;
    public $std;
    public $date;
    public $organizer;
    
    //Declaring the table to be used
    public $tableName = 'teacher_parent_meeting';
        
    public function __construct()
    {
        //$this->middleware('PTAMeeting');//Name of the middleware as given in kernel.php
    }
    
    public function addPTAData(Request $request)
    {
        $this->std = $request->std;
        $this->date = $request->date;
        $this->organizer = $request->organizer;
        
        
        
        
        $this->id = \DB::table($this->tableName)->insertGetId(['std'=>$this->std,'date'=>$this->date,
            'organizer'=>$this->organizer]);
        echo "The meeting has been scheduled with id ".$this->id;         
             
    }
    
    public function updatePTAData(Request $request)
    {
        $this->id = $request->id;
        $this->std = $request->std;
        $this->date = $request->date;
        $this->organizer = $request->organizer;
        
        $this->id = 1;
        $this->std = 6;
        $this->date =date("Y-m-d");
        $this->organizer = 'Mrs.Riya';
        
        //it updates only if the data is present
        $id_present = \DB::table($this->tableName)
                ->where('id', '=', $this->id)->exists();        
        if($id_present)
        {
            \DB::table($this->tableName)->where('id',$this->id)->update(['std'=>$this->std,'date'=>$this->date,
            'organizer'=>$this->organizer]);
        
            echo "The PTA meeting with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The PTA meeting does not Exist or invalid id';
        }
        
    }
    
    public function viewPTAData()
    {
        $PTADataList = \DB::table($this->tableName)->select('id','std','date','organizer')->get();
              
       if($PTADataList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $PTADataList = json_encode($PTADataList);
           echo $PTADataList;
       }
        
    }
    
    public function deletePTAData(Request $request)
    {
        //$this->id = $request->id;
        
        $this->id = 1;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
            echo 'The PTA meeting data with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The PTA meeting data does not exist or invalid id';
        }
    }
}
