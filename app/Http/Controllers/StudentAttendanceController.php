<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentAttendance;

class StudentAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendanceList = StudentAttendance::all();
        return view('studentattendance.index')->with('attendanceList',$attendanceList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('studentattendance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attendance = new StudentAttendance;
//        $attendance->student_id = $request->student_id;
        $attendance->semester = $request->semester;
        $attendance->date = $request->date;
        $attendance->hour1 = $request->hour1;
        $attendance->hour2 = $request->hour2;
        $attendance->hour3 = $request->hour3;
        $attendance->hour4 = $request->hour4;
        $attendance->hour5 = $request->hour5;
        $attendance->hour6 = $request->hour6;
        $attendance->hour7 = $request->hour7;
         \date_default_timezone_set('Asia/Kolkata');
        $attendance->created_time_stamp = date("Y-m-d H:i:s");
        $attendance->last_updated_stamp = $attendance->created_time_stamp;
        
        $attendance->save();
        
        return redirect('studentattendance')->with('Success','Attendance Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendanceList = StudentAttendance::find($id);
        return view('studentattendance.view')->with('atttendanceList',$attendanceList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendanceRecord = StudentAttendance::find($id);
        return view('studentattendance.view')->with('attendanceRecord',$attendanceRecord);
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
        $attendance = StudentAttendance::find($id);
     
        $attendance->semester = $request->semester;
        $attendance->date = $request->date;
        $attendance->hour1 = $request->hour1;
        $attendance->hour2 = $request->hour2;
        $attendance->hour3 = $request->hour3;
        $attendance->hour4 = $request->hour4;
        $attendance->hour5 = $request->hour5;
        $attendance->hour6 = $request->hour6;
        $attendance->hour7 = $request->hour7;
        \date_default_timezone_set('Asia/Kolkata');
        $attendance->last_updated_stamp = date("Y-m-d H:i:s");
        
        $attendance->save();
        
        return redirect('studentattendance')->with('Success','Attendance updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendanceRecord = StudentAttendance::find($id);
        
        $attendanceRecord->delete();
        
        return view('studentattendance')->with('Success','Record Deleted');
    }
}
