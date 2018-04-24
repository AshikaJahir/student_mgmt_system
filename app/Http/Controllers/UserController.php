<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userList = User::all();
        return view('user.index')->with('userList',$userList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User; 
        $user->username = $request->username;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->type = $request->type;
        $user->first_name = $request->firstName;
        $user->last_name=$request->lastName;
        $user->email_address=$request->email;
        $user->mobile_number=$request->mobile;
        $user->address_line_1=$request->addressLine1;
        $user->address_line_2=$request->addressLine2;
        $user->pincode=$request->pincode;
        $user->access_level_mapping_id = $request->accessMappingId;
         \date_default_timezone_set('Asia/Kolkata');
        $user->created_time_stamp = date("Y-m-d H:i:s");
        $user->last_updated_stamp = $user->created_time_stamp;
        
        $user->save();
        
        return redirect('user')->with('Success','User Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userList = User::find($id);
        return view('user.show')->with('userList',$userList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.view')->with('user',$user);
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
        
        $user = User::find($id);
        
        $user->username = $request->username;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->type = $request->type;
        $user->first_name = $request->firstName;
        $user->last_name=$request->lastName;
        $user->email_address=$request->email;
        $user->mobile_number=$request->mobile;
        $user->address_line_1=$request->addressLine1;
        $user->address_line_2=$request->addressLine2;
        $user->pincode=$request->pincode;
        $user->access_level_mapping_id = $request->accessMappingId;
         \date_default_timezone_set('Asia/Kolkata');
        $user->last_updated_stamp = date("Y-m-d H:i:s");
        
        $user->save();
        
        return redirect('user')->with('Success','User Updated');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);  
        
        $user->delete();
        
        return redirect('user')->with('Success','User Deleted');
        
        
    }
}
