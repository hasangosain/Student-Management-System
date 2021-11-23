<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignoutController extends Controller
{
    public function signout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/login');
    }
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/signin');
    }
}
