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



    public function mytower ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            $layout = 'layouts.mobile-layout';
            $isDesktop = false;
        } else {
            $layout = 'layouts.main-layout';
            $isDesktop = true;
        }

        return view('mytower')->with('layout', $layout)->with('isDesktop', $isDesktop);

    }




    public function terms ()
    {

         return view('terms');
    }

    public function phpinfo ()
    {

         return view('phpinfo');
    }

    public function privacy ()
    {

        return view('privacy');

    }

    public function ieo () {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();
    
        if($isMobile || $isTablet) {
            return view('mobile.ieo');
        } else {
            return view('ieo');
        }

    }

    public function soon ()
    {
        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.coming-soon');
        } else {
            return view('coming-soon');
        }
    }


    public function downloads() {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.downloads');
        } else {
            return view('downloads');
        }
    }


    public function videos() {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            return view('mobile.videos');
        } else {
            return view('videos');
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

    public function contact ()
    {

        return view('contact');

    }

    public function sitemap ()
    {

        return response()
                ->view('sitemap')
                ->header('Content-Type', 'text/xml');
    }

    public function myhome()
    {
        return view('myhome');

    }

    public function myhomet()
    {
        return view('myhomet');

    }

     public function mytowert ()
    {

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

    
        if($isMobile || $isTablet) {
            $layout = 'layouts.mobile-layout';
            $isDesktop = false;
        } else {
            $layout = 'layouts.main-layout';
            $isDesktop = true;
        }

        return view('mytowert')->with('layout', $layout)->with('isDesktop', $isDesktop);

    }






}
