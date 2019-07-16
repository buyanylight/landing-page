<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(Request $request) {
    
    	return view('mobile.index');

    }
    public function seller()
    {
    	return view('mobile.seller');
    }

    public function investor()
    {
		return view('mobile.investor');
    }

    public function about()
    {
        return view('mobile.about');
    }

    public function why_us()
    {
        return view('mobile.why-us');
    }

    public function packages()
    {
        return view('mobile.package');
    }

    public function add_ons()
    {
        return view('mobile.add-ons');
    }
}
