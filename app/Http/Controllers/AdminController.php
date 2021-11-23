<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Admin_login;

class AdminController extends Controller
{
    public function login(){
        return view('admin_login');
    }
    public function logedin(Request $request){
        $admin=Admin_login::where('name', $request->name)->where('password',    $request->password)->get()->toArray();
        if($admin){
            $request->session()->put('admin_session', $admin[0]['adminid']);
            return redirect('/adminhome');
        }
        else{
            session::flash('coc' , 'Username and Password does not match');
            return redirect('/login')->withInput();
        }
    }
    public function adminhome(){
        return view('adminhome');
    }
}
