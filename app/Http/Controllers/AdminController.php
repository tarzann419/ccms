<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('test_login');
    }
    public function dashboard(){
        return view('test_dash');
    }
    public function login(Request $request){
//        dd($request->all());

        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('admin.dashboard')->with('error', 'Login Success');
        }
        else {
            return back()->with('error', 'invalid credentials');
        }
    }
}
