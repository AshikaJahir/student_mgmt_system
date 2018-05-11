<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectPaperDetails;

class SubjectPaperDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = SubjectPaperDetails::all();
        return view('subjectpaperdetails.index')->with('list',$list);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('subjectpaperdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new SubjectPaperDetails;            
        $detail->name = $request->name;
        $detail->paper_code = $request->paperCode;
        $detail->descriprion = $request->description;
        $detail->semester = $request->semester;
        $detail->credit_score = $request->credit;
        $detail->course_id = $request->courseId;
         \date_default_timezone_set('Asia/Kolkata');
        $detail->created_time_stamp = date("Y-m-d H:i:s");
        $detail->last_updated_stamp = $detail->created_time_stamp;
        
        $detail->save();
        
        return redirect('subjectpaperdetails')->with('Success','Detail Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = SubjectPaperDetails::find($id);
        return view('subjectpaperdetails.show')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = SubjectPaperDetails::find($id);
        return view('subjectpaperdetails.view')->with('detail',$detail);
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
        
        $detail = SubjectPaperDetails::find($id);
        
        $detail->name = $request->name;
        $detail->paper_code = $request->paperCode;
        $detail->descriprion = $request->description;
        $detail->semester = $request->semester;
        $detail->credit_score = $request->credit;
        $detail->course_id = $request->courseId;
         \date_default_timezone_set('Asia/Kolkata');
        $detail->last_updated_stamp = date("Y-m-d H:i:s");    
        
        $detail->save();
        
        return redirect('subjectpaperdetails')->with('Success','Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = SubjectPaperDetails::find($id);  
        
        $detail->delete();
        
        return redirect('subjectpaperdetails')->with('Success','Detail Deleted');
        
        
    }
}
