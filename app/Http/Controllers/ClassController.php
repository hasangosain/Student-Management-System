<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ClassController extends Controller
{
    //registration page
    public function add(){
        return view('classadd');
    }

    public function insert(Request $request){
        $class=new Classroom;
        $class->cname=$request['cname'];
        $class->classteacherid=$request['classteacherid'];
        $class->save();
        return redirect('/classadd');
    }

    public function select(){
        $classes=Classroom::all();
        $data=compact('classes');
        return view('classrecord')->with($data);
    }

    public function delete($id){
        Classroom::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data= Classroom::find($id);
        return view('classupdate',['data'=>$data]);
    }
    public function update(Request $request){
        $class=Classroom::find($request->id);
        $class->cname=$request['cname'];
        $class->classteacherid=$request['classteacherid'];
        $class->save();
        return redirect('/classrecord');

    }
}
