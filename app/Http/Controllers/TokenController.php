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

	public function buy_tokens(Request $request){

		$credit = $this->PostAPI('https://foloosi.com/api/v1/api/initialize-setup', 
			array
				'redirect_url' => '/buy-tokens',
				'transaction_amount' => request()->USD_value,
				'currency' => 'USD'
			]
		);

			return response()
				->header('merchant_key', 'test_$2y$10$.0TFlqFxM7y.3GoHkDIqWeO-2bT2eBz8t86PVUkHwH9zMghDm5PLi');
	}


	public function payments(){

		return view('buy-token');
	}



}
