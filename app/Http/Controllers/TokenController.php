<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
	public function token_info(){
		$curr = $this->GetApi('https://rest-sandbox.coinapi.io/v1/exchangerate/USD?apikey=2852AF92-ABE7-4222-8678-3ECCAF6A8A7A');

		$curr_result = json_decode($curr, true);
	
		// dd($curr_result);

		foreach ($curr_result['rates'] as $tkey => $tvalue) {
			if ($tvalue['asset_id_quote'] == 'EUR' || $tvalue['asset_id_quote'] == 'BTC' ||  $tvalue['asset_id_quote'] == 'ETH' ||  $tvalue['asset_id_quote'] == 'USD') {
				$all_curr[$tkey] = $tvalue;
				$all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 5, 8);
				$all_curr[$tkey]['time'] = date('d-M-y H:i', strtotime($all_curr[$tkey]['time'])) . ' UTC' ;
			}
		}


		return view('token-info',
			[
				'tokens' => $all_curr
			]
		);
	}

	public function buy_tokens(Request $r){


		$curr = explode(' ', $r['currency']);


		if ($curr[1] == 'USD' || $curr[1] == 'EUR') {
		// dd($curr[1]);
			// $faloosi = [];
			$client = new \GuzzleHttp\Client();
			$url = "https://foloosi.com/api/v1/api/initialize-setup";


			$myBody = array(
				'redirect_url' => '/buy-token', 
				'transaction_amount' => $curr[0],
				'currency' => $curr[1]
			);	

			$request = $client->request('POST', $url, [
				'headers' =>  [
					'merchant_key' => 'test_$2y$10$.0TFlqFxM7y.3GoHkDIqWeO-2bT2eBz8t86PVUkHwH9zMghDm5PLi',
				],
				'form_params' => $myBody
			]);

			$response = json_decode($request->getBody(), true);
			$response_data = $response['data'];

			return view('buy-token', [
				'response' => $response_data['reference_token'],
				'curr' => 'credit'
			]);


		} elseif ($curr[1] == 'BTC') {
			return view('buy-token', [
				'amt' => $curr[0],
				'curr' => 'BTC'
			]);
		} else {
			return view('buy-token', [
				'amt' => $curr[0],
				'curr' => 'ETH'
			]);
		}

	}


	public function kyc(Request $request){

		// dd($request);

		$this->validate($request, [
                'transaction_id' => 'required',
                'receiver_id' => 'required',
            ]);
            \Mail::send('mail.token',
            array(
                'transaction_id' => $request->get('transaction_id'),
                'receiver_id' => $request->get('receiver_id'),
            ), function($message) use ($request)
           	{
                $message->from('no-reply@buyanylight.com');
                $message->to('info@buyanylight.com', 'Admin')->subject('New BAL Token Transaction');
            });


		return view('kyc')->with('success');
	}

		public function kyc_card(Request $request){

		// dd($request);

		$this->validate($request, [
                'receiver_id' => 'required',
            ]);
            \Mail::send('mail.token-card',
            array(
                
                'receiver_id' => $request->get('receiver_id'),
            ), function($message) use ($request)
           	{
                $message->from('no-reply@buyanylight.com');
                $message->to('info@buyanylight.com', 'Admin')->subject('New BAL Token Transaction');
            });


		return view('kyc');
	}



}
