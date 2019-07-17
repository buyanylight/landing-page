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

    
        if($isMobile || $isTablet) {
            return view('mobile.index');
        } else {
            return view('welcome');
        }

    }

    public function seller ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.seller');
        } else {
            return view('seller');
        }

    }

    public function investor ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.investor');
        } else {
            return view('investor');
        }

    }

    public function terms ()
    {

         return view('terms');
    }

    public function privacy ()
    {

        return view('privacy');

    }

    public function ieo ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.ieo');
        } else {
            return view('ieo');
        }



    }

    public function seller_faq ()
    {

        return view('seller-faq');

    }

    public function buyer_faq ()
    {

        return view('buyer-faq');

    }


}
