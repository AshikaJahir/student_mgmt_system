<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentSubjectPaperMapping;

class StudentSubjectPaperMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = StudentSubjectPaperMapping::all();
        return view('studentsubjectpaper.index')->with('list',$list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('studentsubjectpaper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new StudentSubjectPaperMapping;
        $detail->student_id = $request->studentId;
        $detail->paper_id = $request->paperId;
        $detail->type = $request->type;
        $detail->marks_attained = $request->marks;
        $detail->semester = $request->semester;
         \date_default_timezone_set('Asia/Kolkata');
        $detail->created_time_stamp = date("Y-m-d H:i:s");
        $detail->last_updated_stamp = $detail->created_time_stamp;
        
        $detail->save();
        
        return redirect('studentsubjectpaper')->with('Success','Detail Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = StudentSubjectPaperMapping::find($id);
        return view('studentsubjectpaper.show')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = StudentSubjectPaperMapping::find($id);
        return view('studentsubjectpaper.view')->with('detail',$detail);
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
        
        $detail = StudentSubjectPaperMapping::find($id);
        
        $detail->student_id = $request->studentId;
        $detail->paper_id = $request->paperId;
        $detail->type = $request->type;
        $detail->marks_attained = $request->marks;
        $detail->semester = $request->semester;
         \date_default_timezone_set('Asia/Kolkata');
        $detail->last_updated_stamp = date("Y-m-d H:i:s");
        
        $detail->save();
        
        return redirect('studentsubjectpaper')->with('Success','Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = StudentSubjectPaperMapping::find($id);  
        
        $detail->delete();
        
        return redirect('studentsubjectpaper')->with('Success','Detail Deleted');
        
        
    }
}
