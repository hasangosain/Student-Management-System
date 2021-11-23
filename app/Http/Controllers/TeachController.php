<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Routine;
use Session;

class TeachController extends Controller
{
     //Viewing Teacher login Page
     public function signin(){
        return view('signin');
     }
    public function loggedin(Request $request){
        $teacher=Teacher::where('email',$request->email)->where('password',    $request->password)->get()->toArray();
        if($teacher){
            $request->session()->put('teacher_session', $teacher[0]['tid']);
            return redirect('/teacherhome');
        }
        else{
            session::flash('coc' , 'Username and Password does not match');
            return redirect('/signin')->withInput();
        }

    }

    public function teacherhome(){
        return view('teacherhome');
    }
    public function profile(){
        // $teacherid=$request->session()->get('teacher_session');
        $teacherid=Session::get('teacher_session');
        $teacherdata=Teacher::where('tid', $teacherid)->first();
        $data=compact('teacherdata');
        return view('teacherprofile')->with($data);
    }
   
    public function routine(){
        $routines=Routine::all();
        $data=compact('routines');
        return view('routine')->with($data);
    }
}
