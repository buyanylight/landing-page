<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokenController extends Controller
{
	public function buy_tokens(){
		$curr = $this->GetApi('https://rest-sandbox.coinapi.io/v1/exchangerate/USD?apikey=2852AF92-ABE7-4222-8678-3ECCAF6A8A7A');

		$curr_result = json_decode($curr, true);
	

		foreach ($curr_result['rates'] as $tkey => $tvalue) {
			if ($tvalue['asset_id_quote'] == 'EUR' || $tvalue['asset_id_quote'] == 'BTC' ||  $tvalue['asset_id_quote'] == 'ETH' ||  $tvalue['asset_id_quote'] == 'USD') {
				$all_curr[$tkey] = $tvalue;
				$all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 5, 8);
			}
		}

		// dd($all_curr);

		return view('buy-tokens',
			[
				'tokens' => $all_curr
			]
		);
	}
}
