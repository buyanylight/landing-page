<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;


class ContactUsController extends Controller
{
    public function contactSaveData(Request $request)
   {

    $recaptcha_secret_key = env('CAPTCHA_KEY');
    $recaptcha_secret = env('CAPTCHA_SECRET_KEY');

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_response = $request->recaptcha_response;

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);


    if ($recaptcha->success==true) {

        if ($recaptcha->score >=0.5) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'subject'=>'required',
                'message' => 'required'
            ]);
            ContactUs::create($request->all());
            \Mail::send('mail.contactus',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
        		'subject' => $request->get('subject'),
                'user_message' => $request->get('message')
            ), function($message) use ($request)
           	{
                $message->from('no-reply@buyanylight.com');
                $message->to('info@buyanylight.com', 'Admin')->subject($request->get('subject'));
            });
               return back()->with('success', '<br> We will get back to you shortly.');
           } else {
                return back()->with('danger', 'Please try again later!');
           }
        } else {
            return back()->with('danger', 'Please try again later! <br> Could not validate you.');
        }       
    }
}
