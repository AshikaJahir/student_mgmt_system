<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $id;
    public $firstname;
    public $lastname;
    public $gender;
    public $contact; 
    
    //Declaring the table to be used
    public $tableName = 'admin_data';
    
    public function __construct()
    {
        //$this->middleware('Admin');//Name of the middleware as given in kernel.php
    }
    
    public function addAdminData(Request $request)
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
        
        echo "Admin ". $this->firstname." has been inserted with the id ".$this->id;
    }
    
    public function updateAdminData(Request $request)
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
        
            echo "The admin with id ". $this->id." has been updated successfully";
        }
        else
        {
            echo 'The admindata does not Exist or invalid id';
        }
        
    }
    
    public function viewAdminData()
    {
        $adminList = \DB::table($this->tableName)->select('id','firstname','lastname','gender','contact')->get();       
        
       if($adminList == '[]')
       {
           echo 'No details Available';
       }
       else
       {
           $adminList = json_encode($adminList);
           echo $adminList;
       }
        
    }
    
    public function deleteAdminData(Request $request)
    {
        //$this->id = $request->id;
        
            $this->id = 1;
            
        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
        if($id_present)
        {        
            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
            echo 'The admin with id ' .$this->id. ' has been deleted successfully';
        }
        else
        {
            echo 'The admin data does not exist or invalid id';
        }
    }
}
