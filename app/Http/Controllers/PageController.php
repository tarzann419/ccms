<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ComingSoon(){
        return view('coming_soon');
    }
}
