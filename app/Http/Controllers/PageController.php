<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;


class PageController extends Controller
{
     public function home ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile && !$isTablet) {
            return view('mobile.index');
        } else {
            return view('welcome');
        }

    }
}
