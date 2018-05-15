<?php

namespace App\Http\Controllers\Parent;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ParentController extends Controller
{
     public function index()
    {
        $parentList = ParentDetails::all();
        return view('parentdetails.index')->with('parentList',$parentList);
    }
    
    public function create()
    {
        return view ('parentdetails.create');
    }
    
     public function store(Request $request)
    {
        $parentDetail = new ParentDetails;
        $parentDetail->first_name = $request->first_name;
        $parentDetail->last_name = $request->last_name;
        $parentDetail->relationship = $request->relationship;
        $parentDetail->gender = $request->gender;
        $parentDetail->dob = $request->dob;
        $parentDetail->address = $request->address;
        $parentDetail->email_id = $request->email_id;
        $parentDetail->contact_number = $request->contact_number;
//        \date_default_timezone_set('Asia/Kolkata');
//        $courseDetail->created_time_stamp = date("Y-m-d H:i:s");
//        $courseDetail->last_updated_stamp = $courseDetail->created_time_stamp;
//        
        $parentDetail->save();
        
        return redirect('parentdetails')->with('Success','Parent Detail Inserted');
    }
    
     public function show($id)
    {
        $parentList = ParentDetails::find($id);
        return view('parentdetails.view')->with('parentList',$parentList);
    }

      public function edit($id)
    {
        $parentDetail = ParentDetails::find($id);
        return view('parentdetails.view')->with('parentDetail',$parentDetail);
    }
    
    public function update(Request $request, $id)
    {
        $parentDetail = ParentDetails::find($id);
        $parentDetail->first_name = $request->first_name;
        $parentDetail->last_name = $request->last_name;
        $parentDetail->relationship = $request->relationship;
        $parentDetail->gender = $request->gender;
        $parentDetail->dob = $request->dob;
        $parentDetail->address = $request->address;
        $parentDetail->email_id = $request->email_id;
        $parentDetail->contact_number = $request->contact_number;
       
//        \date_default_timezone_set('Asia/Kolkata');
//        $courseDetail->last_updated_stamp = date("Y-m-d H:i:s");
        
        $parentDetail->save();
        
        return redirect('parentdetails')->with('Success','Parent Detail Updated');
    }
    
     public function destroy($id)
    {
        $parentDetail = ParentDetails::find($id);
        
        $parentDetail->delete();
        
        return redirect('parentdetails')->with('Success','Parent Details Deleted');
    }
//    public $id;
//    public $firstname;
//    public $lastname;
//    public $gender;
//    public $contact; 
    
    //Declaring the table to be used
//    public $tableName = 'parent_data';
    
//    public function __construct()
//    {
        //$this->middleware('Parent');//Name of the middleware as given in kernel.php
//    }
//    
//    public function addParentData(Request $request)
//    {
//        /*$this->firstname = $request->firstname;
//        $this->lastname = $request->lastname;
//        $this->gender = $request->gender;
//        $this->contact = $request->contact;*/
//        
//        $this->firstname = 'Ashika';
//        $this->lastname = 'Jahir';
//        $this->gender = 'Female';
//        $this->contact = '9632563259';  
//               
//        
//        $this->id = \DB::table($this->tableName)->insertGetId(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'gender' => $this->gender,
//             'contact'=>$this->contact]);
//        
//        echo "Parent ". $this->firstname." has been inserted with the id ".$this->id;
//    }
//    
//    public function updateParentData(Request $request)
//    {
       /* $this->id = $request->id;
        $this->firstname = $request->firstname;
        $this->lastname = $request->lastname;
        $this->gender = $request->gender;
        $this->contact = $request->contact; */
        
//        $this->id = 3;
//        $this->firstname = 'Ashika';
//        $this->lastname = 'J';
//        $this->gender = 'Male';
//        $this->contact = '9632563259';
//        
//        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
//        if($id_present)
//        {
//            \DB::table($this->tableName)->where('id',$this->id)->update(['firstname' => $this->firstname , 'lastname'=> $this->lastname ,'gender' => $this->gender,
//             'contact'=>$this->contact]);
//        
//            echo "The parent with id ". $this->id." has been updated successfully";
//        }
//        else
//        {
//            echo 'The parentdata does not Exist or invalid id';
//        }
        
    }
    
//    public function viewParentData()
//    {
//        $parentList = \DB::table($this->tableName)->select('id','firstname','lastname','gender','contact')->get();        
//        
//       if($parentList == '[]')
//       {
//           echo 'No details Available';
//       }
//       else
//       {
//           $parentList = json_encode($parentList);
//           echo $parentList;
//       }
//        
//    }
//    
//    public function deleteParentData(Request $request)
//    {
//        //$this->id = $request->id;
//        
//            $this->id = 3;
//            
//        $id_present = \DB::table($this->tableName)->where('id',$this->id)->exists();
//        if($id_present)
//        {        
//            \DB::table($this->tableName)->where('id', '=', $this->id)->delete();
//            echo 'The parent with id ' .$this->id. ' has been deleted successfully';
//        }
//        else
//        {
//            echo 'The parent data does not exist or invalid id';
//        }
//    }
}
