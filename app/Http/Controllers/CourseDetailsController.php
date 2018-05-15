<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseDetails;

class CourseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $courseList = CourseDetails::all();
        return view('coursedetails.index')->with('courseList',$courseList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('coursedetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseDetail = new CourseDetails;
        $courseDetail->course_name = $request->course_name;
        $courseDetail->course_code = $request->course_code;
        $courseDetail->description = $request->description;
        \date_default_timezone_set('Asia/Kolkata');
        $courseDetail->created_time_stamp = date("Y-m-d H:i:s");
        $courseDetail->last_updated_stamp = $courseDetail->created_time_stamp;
        
        $courseDetail->save();
        
        return redirect('coursedetails')->with('Success','Course Detail Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseList = CourseDetails::find($id);
        return view('coursedetails.view')->with('courseList',$courseList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseDetail = CourseDetails::find($id);
        return view('coursedetails.view')->with('courseDetail',$courseDetail);
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
        $courseDetail = CourseDetails::find($id);
        
        $courseDetail->course_name = $request->course_name;
        $courseDetail->course_code = $request->course_code;
        $courseDetail->description = $request->description;
        \date_default_timezone_set('Asia/Kolkata');
        $courseDetail->last_updated_stamp = date("Y-m-d H:i:s");
        
        $courseDetail->save();
        
        return redirect('coursedetails')->with('Success','Course Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseDetail = CourseDetails::find($id);
        
        $courseDetail->delete();
        
        return redirect('coursedetails')->with('Success','Course Details Deleted');
    }
}
