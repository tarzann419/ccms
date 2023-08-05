<?php

namespace App\Http\Controllers;

use App\Models\CitizenDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InecController extends Controller
{
    public function index(){
        return view('inec.login');
    }

    public function login(Request $request)
    {
//        dd($request->all());
        $check = $request->all();
        if (Auth::guard('inec')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('dashboard.inec')->with('error', 'Login Success');
        }
        else {
            return back()->with('error', 'invalid credentials');
        }
    }

    public function logout(){
        Auth::guard('inec')->logout();
        return redirect()->route('dashboard.inec')->with('error', 'Logout Success');
    }

    public function dashboard()
    {
        return view('inec.dashboard');
    }

    public function all_inec()
    {
        return view('inec.all');
    }


    public function search_nin(Request $request){
        $nin = $request->input('nin');

        $result = CitizenDetails::where('nin', $nin)->exists();

        if ($result){
            return redirect()->route('show.record', ['nin' => $nin]);
        }  else{
            return "NOT FOUND";
        }
    }

    public function show_record($nin)
    {
        $record = CitizenDetails::where('nin', $nin)->firstOrFail();

        return view('inec.continue_reg', compact('record'));
    }

    public function register_voter()
    {
        return view('inec.register_voter');
    }



//    public function all_inec(){
//        return view('inec.all_inec');
//    }
}
