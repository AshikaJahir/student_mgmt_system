<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDatacontroller extends Controller
{
    public $feeid;
    public $feeterm;
    public $studentid;
        
    //Declaring the table to be used
    public $tableName = 'student_fee_data';
    public $tableDependent = 'student_data';
        
    public function __construct()
    {
        //  $this->middleware('FeeData');//Name of the middleware as given in kernel.php
    }
    
    public function addFeeData(Request $request)
    {
        $this->feeterm= $request->feeterm;
        $this->studentid = $request->studentid;
        
        $this->feeterm = 'Monthly';
        $this->studentid = 2; 
        
        //Checks whether the student exists in the student data table, it inserts only if the data present
        $data_exist = \DB::table($this->tableName)->where('studentid',$this->studentid)->doesntExist();
        $studentExist = \DB::table($this->tableDependent)->where('id',$this->studentid)->exists();
        if($studentExist)
        {
           if($data_exist)
            {
                $this->feeid = \DB::table($this->tableName)->insertGetId(['feeterm'=>$this->feeterm,'studentid'=>$this->studentid]);
                echo "The fee data has been inserted with the id ".$this->feeid;
            }
            else
            {
                echo 'The fee data for the student already exists, please update using fee id';
            }        
        }
        else
        {
            echo 'The student doesnot exist';
        }
        
        
    }
    
    public function updateFeeData(Request $request)
    {
        $this->feeid = $request->feeid;
        $this->feeterm= $request->feeterm;
        $this->studentid = $request->studentid;
        
        $this->feeid = 2;
        $this->feeterm = 'yearly';
        $this->studentid = 2; 
        
        //it updates only if the base table and child table id matches
        $id_present = \DB::table($this->tableName)
                ->where([
                        ['feeid', '=', $this->feeid],
                        ['studentid', '=', $this->studentid],
                    ])->exists();
        
        if($id_present)
        {
            \DB::table($this->tableName)->where('feeid',$this->feeid)->update(['feeterm'=>$this->feeterm,'studentid'=>$this->studentid]);
        
            echo "The Fee data with id ". $this->feeid." has been updated successfully";
        }
        else
        {
            echo 'The Fee data does not Exist or invalid fee/student id';
        }
        
    }
    
    public function viewFeeData()
    {
        $feeDataList = \DB::table($this->tableName)->select('feeid','feeterm','studentid')->get();
              
       if($feeDataList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $feeDataList = json_encode($feeDataList);
           echo $feeDataList;
       }
        
    }
    
    public function deleteFeeData(Request $request)
    {
        //$this->feeid = $request->feeid;
        
        $this->feeid = 9;
            
        $id_present = \DB::table($this->tableName)->where('feeid',$this->feeid)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('feeid', '=', $this->feeid)->delete();
            echo 'The Fee data with id ' .$this->feeid. ' has been deleted successfully';
        }
        else
        {
            echo 'The Fee data does not exist or invalid fee id';
        }
    }
}
