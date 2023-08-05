<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FRSCController extends Controller
{
    public function index(){
        return view('frsc.login');
    }

    public function login(Request $request){
//        dd($request->all());
        $check = $request->all();
        if (Auth::guard('frsc')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('dashboard.frsc')->with('error', 'Login Success');
        }
        else {
            return back()->with('error', 'invalid credentials');
        }
    }

    public function dashboard(){
        return view('frsc.dashboard');
    }
}
