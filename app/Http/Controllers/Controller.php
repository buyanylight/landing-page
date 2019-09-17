<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function GetApi($url)
    {
    	$client = new \GuzzleHttp\Client();
    	$request =  $client->get($url);
    	$response = $request->getBody();
    	return $response;
    }

    public function PostApi($url, $body)
    {
    	$client = new \GuzzleHttp\Client();
    	$response = $client->createRequest("POST", $url, ['body'=>$body]);
    	$response = $client->send($response);
    	return $response;
    }
}
