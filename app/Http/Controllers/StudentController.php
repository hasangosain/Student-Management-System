<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function add(){
        return view('studentadd');
    }
    public function insert(Request $request){
        $data=new Student;
        $data->firstname=$request['firstname'];
        $data->middlename=$request['middlename'];
        $data->lastname=$request['lastname'];
        $data->email=$request['email'];
        $data->address=$request['address'];
        $data->gender=$request['gender'];
        $data->class=$request['class'];
        $data->save();
        return redirect('/studentadd');
    }
    public function select(){
        $students=Student::all();
        $data=compact('students');
        return view('studentrecord')->with($data);
    }
    public function delete($id){
        Student::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data= Student::find($id);
        return view('studentupdate',['data'=>$data]);
    }
    public function update(Request $request){
        $data=Student::find($request->id);
        $data->firstname=$request->firstname;
        $data->middlename=$request->middlename;
        $data->lastname=$request->lastname;
        $data->email=$request->email;
        $data->address=$request->address;
        $data->gender=$request->gender;
        $data->class=$request->class;
        $data->save();
        return redirect('/studentrecord');
}
}