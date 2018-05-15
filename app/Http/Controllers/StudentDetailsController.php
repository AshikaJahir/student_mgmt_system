<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentDetails;

class StudentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentList = StudentDetails::all();
        return view('studentdetails.index')->with('studentList',$studentList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('studentdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentDetail = new StudentDetails;
        $studentDetail->course_details_id = $request->courseid;
        $studentDetail->user_id = $request->userid;
        $studentDetail->contact_info = $request->contact;
        $studentDetail->year_of_joining = $request->yearOfJoin;
        $studentDetail->year_of_passout = $request->yearOfPassout;
//         \date_default_timezone_set('Asia/Kolkata');
//        $studentDetail->created_time_stamp = date("Y-m-d H:i:s");
//        $studentDetail->last_updated_stamp = $studentDetail->created_time_stamp;
//        
        $studentDetail->save();
        
        return redirect('studentdetails')->with('Success','Student Detail Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentList = StudentDetails::find($id);
        return view('studentdetails.view')->with('studentList',$studentList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentDetail = StudentDetails::find($id);
        return view('studentdetails.view')->with('studentDetail',$studentDetail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentDetail = StudentDetails::find($id);        
        
        $studentDetail->course_details_id = $request->courseid;
        $studentDetail->user_id = $request->userid;
        $studentDetail->contact_info = $request->contact;
        $studentDetail->year_of_joining = $request->yearOfJoin;
        $studentDetail->year_of_passout = $request->yearOfPassout;
//         \date_default_timezone_set('Asia/Kolkata');
//        $studentDetail->last_updated_stamp = date("Y-m-d H:i:s");
//        
        $studentDetail->save();
        
        return redirect('studentdetails')->with('Success','Student Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentDetail = StudentDetails::find($id);  
        
        $studentDetail->delete();
        
        return redirect('studentdetails')->with('Success','Student Detail Deleted');
        
        
    }
}
