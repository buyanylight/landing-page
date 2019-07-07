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
}
