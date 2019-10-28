<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;


class SubscribeController extends Controller
{
    public function saveData(Request $request)
   {

    $recaptcha_secret_key = env('CAPTCHA_KEY');
    $recaptcha_secret = env('CAPTCHA_SECRET_KEY');

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_response = $request->recaptcha_response;

    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // dd($request);

    if ($recaptcha->success==true) {

        if ($recaptcha->score >=0.5) {
            $data = $this->validate($request, [
                'email' => 'required|email',
                'answer' => 'required',
            ]);

                // dd($data);

            Subscribe::create($data);
          //   \Mail::send('mail.contactus',
          //   array(
          //       'name' => $request->get('name'),
          //       'email' => $request->get('email'),
        		// 'subject' => $request->get('subject'),
          //       'user_message' => $request->get('message')
          //   ), function($message) use ($request)
          //  	{
          //       $message->from('no-reply@buyanylight.com');
          //       $message->to('info@buyanylight.com', 'Admin')->subject($request->get('subject'));
          //   });
                    if ($request->has('tower')) {
                        return redirect('/mytower?thank-you')->with('success', '<br> We will get back to you shortly.');
                    } else {
                        return redirect('/myhome?thank-you')->with('success', '<br> We will get back to you shortly.');
                    }
           } else {
                return back()->with('danger', 'Please try again later!');
            }
        } else {
            return back()->with('danger', 'Please try again later! <br> Could not validate you.');
        }       
    }
}
