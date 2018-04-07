<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportDataController extends Controller
{
    public $tranportid;
    public $transportmode;
    public $fee;
    public $studentid;
        
    //Declaring the table to be used
    public $tableName = 'student_transport_data';
    public $tableDependent = 'student_data';
        
    public function __construct()
    {
        $this->middleware('TransportData');//Name of the middleware as given in kernel.php
    }
    
    public function addTransportData(Request $request)
    {
        /*$this->transportmode = $request->transportmode;
        $this->fee = $request->fee;
        $this->studentid = $request->studentid; */
        
        $this->transportmode = 'AC BUS';
        $this->fee = 1000;
        $this->studentid = 2; 
               
        $data_exist = \DB::table($this->tableName)->where('studentid',$this->studentid)->doesntExist();
        $studentExist = \DB::table($this->tableDependent)->where('id',$this->studentid)->exists();
        if($studentExist)
        {
           if($data_exist)
            {
                $this->transportid = \DB::table($this->tableName)->insertGetId(['transportmode'=>$this->transportmode, 'fee'=> $this->fee,
                                'studentid'=>$this->studentid]);
                echo "The transport data has been inserted with the id ".$this->transportid;
            }
            else
            {
                echo 'The transport data for the student already exists, please update using tranport id';
            }        
        }
        else
        {
            echo 'The student doesnot exist';
        }
        
        
    }
    
    public function updateTransportData(Request $request)
    {
        /*$this->transportid = $request->transportid;
        $this->transportmode = $request->transportmode;
        $this->fee = $request->fee;
        $this->studentid = $request->studentid;*/
        
        $this->transportid = 3;
        $this->transportmode = 'Non Ac BUS';
        $this->fee = 730;
        $this->studentid = 2;
        
        
        $id_present = \DB::table($this->tableName)
                ->where([
                        ['transportid', '=', $this->transportid],
                        ['studentid', '=', $this->studentid],
                    ])->exists();
        
        if($id_present)
        {
            \DB::table($this->tableName)->where('transportid',$this->transportid)->update(['transportmode'=>$this->transportmode, 'fee'=> $this->fee,
                            'studentid'=>$this->studentid]);
        
            echo "The Transport data with id ". $this->transportid." has been updated successfully";
        }
        else
        {
            echo 'The Transport data does not Exist or invalid transport/student id';
        }
        
    }
    
    public function viewTransportData()
    {
        $transportDataList = \DB::table($this->tableName)->select('transportid','transportmode','fee','studentid')->get();
              
       if($transportDataList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $transportDataList = json_encode($transportDataList);
           echo $transportDataList;
       }
        
    }
    
    public function deleteTransportData(Request $request)
    {
        //$this->transportid = $request->transportid;
        
        $this->transportid = 3;
            
        $id_present = \DB::table($this->tableName)->where('transportid',$this->transportid)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('transportid', '=', $this->transportid)->delete();
            echo 'The Transport data with id ' .$this->transportid. ' has been deleted successfully';
        }
        else
        {
            echo 'The Transport data does not exist or invalid tranposrt id';
        }
    }
}
