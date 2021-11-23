<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function add(){
        return view('teacheradd');
    }
    public function insert(Request $request){
       $data=new Teacher;
       $data->firstname=$request['firstname'];
       $data->middlename=$request['middlename'];
       $data->lastname=$request['lastname'];
       $data->email=$request['email'];
       $data->password=$request['password'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/timages/', $filename);
            $data->image = $filename;
        } else {
            return $request;
            $pages->image = '';
        }
        $data->save();
        return redirect('/teacheradd');
    }
    public function select(){
        $teachers=Teacher::all();
        $data=compact('teachers');
        return view('teacherrecord')->with($data);
    }
    public function delete($id){
        Teacher::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data= Teacher::find($id);
        return view('teacherupdate',['data'=>$data]);
    }
    public function update(Request $request){
        $teacher=Teacher::find($request->id);
        $teacher->firstname=$request['firstname'];
        $teacher->middlename=$request['middlename'];
        $teacher->lastname=$request['lastname'];
        $teacher->email=$request['email'];
        $teacher->password=$request['password'];
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/timages/', $filename);
            $teacher->image = $filename;
        } 
        $teacher->save();
        return redirect('/teacherrecord');

    }

}
