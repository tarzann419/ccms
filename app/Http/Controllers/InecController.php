<?php

namespace App\Http\Controllers;

use App\Models\CitizenDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InecController extends Controller
{
    public function index(){
        return view('inec.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::guard('inec')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('dashboard.inec')->with('success', 'Login Success');
        } else {
            return back()->with('error', 'Invalid credentials');
        }
    }

    public function logout(){
        Auth::guard('inec')->logout();
        return redirect()->route('dashboard.inec')->with('error', 'Logout Success');
    }

    public function all_inec(){
        $all_inec = CitizenDetails::all();

        return view('inec.all', compact('all_inec'));
    }

    public function dashboard()
    {
        return view('inec.dashboard');
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

        return view('inec.continue_reg', compact('record', 'nin'));
    }

    public function register_voter()
    {
        return view('inec.register_voter');
    }


    public function storeGenerated()
    {
        $input = [
            'pvc_id' => $this->generatePvcId(),
            'nin' => '',
        ];

        $pvc_id = CitizenDetails::insert($input);

        dd($pvc_id);
    }


    public function generatePvcId($nin)
    {

        $randomNumber = random_int(1000000000, 9999999999);

        $expiryDate = Carbon::now()->addYear(2);


        CitizenDetails::where('nin', $nin)
            ->update([
                'pvc_id' => $randomNumber,
                'updated_at' => Carbon::now(),
                'pvc_id_exp' => $expiryDate
            ]);

        return redirect()->back()->with('success', 'PVC ID generated successfully.');
//        CitizenDetails::where('nin', $nin)->insert($randomNumber);

//        dd($randomNumber);
    }
}
