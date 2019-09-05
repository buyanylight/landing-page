<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class OutController extends Controller {
    
    public function __construct() {
 
    }

    public function index(Request $request, $provider) {
     	
   //   	$str = '';
   //  	$str.=  "code=".$request->code.'<br>';
   //  	$str.=  "scope=".$request->scope.'<br>';
   //  	$str.=  "authuser=".$request->authuser.'<br>';
   //  	$str.=  "session_state=".$request->session_state.'<br>';
   //  	$str.=  "prompt=".$request->prompt.'<br>';
 		
 		// return $str;

        $user = Socialite::driver($provider)->stateless()->user(); 
        // $user = Socialite::driver($provider)->scopes(['users:email'])->user(); 
        
        // $user = Socialite::driver('LinkedIn')->stateless(false)->scopes(['users:email'])->user(); 

        // return "<pre>".$user->token."</pre>";
        return "<pre>".dd($user)."</pre>";



        return view('authentication.callback', [
            'fullname' => $user->name,
            'email' => $user->email,
            'token' => $user->token,
        ]);

    }
}
