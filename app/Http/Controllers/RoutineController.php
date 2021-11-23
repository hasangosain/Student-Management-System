<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;

class RoutineController extends Controller
{
    
    //registration page
    public function add(){
        return view('routineadd');
    }
     public function insert(Request $request){
        $routine=new Routine;
        $routine->subject=$request['subject'];
        $routine->day=$request['day'];
        $routine->class_id=$request['class_id'];
        $routine->save();
        return redirect('/routineadd');
    }
    public function select(){
        $routines=Routine::all();
        $data=compact('routines');
        return view('routinerecord')->with($data);
    }

    public function delete($id){
        Routine::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $data= Routine::find($id);
        return view('routineupdate',['data'=>$data]);
    }
    public function update(Request $request){
        $routine=Routine::find($request->id);
        $routine->subject=$request['subject'];
        $routine->day=$request['day'];
        $routine->class_id=$request['class_id'];
        $routine->save();
        return redirect('/routinerecord');

    }
    
}
