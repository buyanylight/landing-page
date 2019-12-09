<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;


// use Illuminate\Support\Facades\Mail;
use App\TokenBuyer;
use App\Mail\BuyingConfirmation;
use App\Mail\BuyingConfirmationAdmin;
use App\Mail\KYCConfirmation;
use App\Mail\KYCConfirmationAdmin;


class TokenController extends Controller
{
	public function token_info(){

		$curr = $this->GetApi('https://rest.coinapi.io/v1/exchangerate/USD?apikey='.env('COINAPI_KEY'));

		$curr_result = json_decode($curr, true);
	
		// dd($curr_result['rates']);


		foreach ($curr_result['rates'] as $tkey => $tvalue) {

			if ($tvalue['asset_id_quote'] == 'XMR' || $tvalue['asset_id_quote'] == 'BTC' || $tvalue['asset_id_quote'] == 'ETH' || $tvalue['asset_id_quote'] == 'BNB' || $tvalue['asset_id_quote'] == 'LINK' || $tvalue['asset_id_quote'] == 'QNT' || $tvalue['asset_id_quote'] == 'REN' || $tvalue['asset_id_quote'] == 'LTC' || $tvalue['asset_id_quote'] == 'EOS' || $tvalue['asset_id_quote'] == 'ZCN' || $tvalue['asset_id_quote'] == 'ADA' ) {
					$ticker[] = $tvalue;
			}

			if ($tvalue['asset_id_quote'] == 'EUR' || $tvalue['asset_id_quote'] == 'BTC' ||  $tvalue['asset_id_quote'] == 'ETH' ||  $tvalue['asset_id_quote'] == 'USD') {
				$all_curr[$tkey] = $tvalue;
				// $all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 5, 8);
				$all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 4, 8);
				$all_curr[$tkey]['time'] = date('d-M-y H:i', strtotime($all_curr[$tkey]['time'])) . ' UTC' ;
			}

			if ($tvalue['asset_id_quote'] == 'EUR'){
				$all_curr[$tkey]['logo'] = '<i class="fas fa-euro-sign"></i>';
				$all_curr[$tkey]['symbol'] = 'Euro';
				$all_curr[$tkey]['rank'] = 2;
			}
			if ($tvalue['asset_id_quote'] == 'USD'){
				$all_curr[$tkey]['logo'] = '<i class="fas fa-dollar-sign"></i>';
				$all_curr[$tkey]['symbol'] = 'US Dollar';
				$all_curr[$tkey]['rank'] = 1;
			}
			if ($tvalue['asset_id_quote'] == 'BTC'){
				$all_curr[$tkey]['logo'] = '<i class="fab fa-bitcoin"></i>';	
				$all_curr[$tkey]['symbol'] = 'Bitcoin';
				$all_curr[$tkey]['rank'] = 3;
			}
			if ($tvalue['asset_id_quote'] == 'ETH'){
				$all_curr[$tkey]['logo'] = '<i class="fab fa-ethereum"></i>';
				$all_curr[$tkey]['symbol'] = 'Ethereum';
				$all_curr[$tkey]['rank'] = 4;
			}

		}
				// dd($ticker);

		usort($all_curr, function($a, $b) {
   			return $a['rank'] <=> $b['rank'];
		});


		if (!empty($_GET['code'])) {
			$code = $_GET['code'];
		} else {
			$code = '';
		}





		$agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

 		if($isMobile || $isTablet) {
            return view('mobile.ieo', [
            	'code' => $code,
            	'ticker' => $ticker,
				'tokens' => $all_curr
            ])->with('showpopup',true);
        } else {
            return view('ieo', [
            	'code' => $code,
            	'ticker' => $ticker,
				'tokens' => $all_curr
            ])->with('showpopup',true);
        }
	}



	public function get_token(){

		$tknbyer = TokenBuyer::where('email_id', 'LIKE', '%'.$_GET['email'].'%')->sum('bal_amt');


		// dd($tknbyer);

		return response($tknbyer);
	}


		public function get_trxn(){

		$codebyer = TokenBuyer::where('referred_code', 'LIKE', '%'.$_GET['code'].'%')->get();


		// dd($codebyer);

		return response($codebyer);
	}


	public function buy_tokens(Request $r){



		$curr = explode(' ', $r['currency']);


		function generateRandomString($length) {
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$charactersLength = strlen($characters);
    		$randomString = '';
    		for ($i = 0; $i < $length; $i++) {
        		$randomString .= $characters[rand(0, $charactersLength - 1)];
    		}
    		return $randomString;
		}

		if (!empty($r['referral_code'])) {
			$code = $r['referral_code'];
		} else {
			$code = '';
		}

		if ($curr[1] == 'USD' || $curr[1] == 'EUR') {

			// dd($r['referral_code']);

			$test_url = "https://www.foloosi.com/";

			if (strpos(get_headers($test_url)[0] , "200") !== false) {

				$client = new \GuzzleHttp\Client();
				$url = "https://foloosi.com/api/v1/api/initialize-setup";

				$myBody = array(
					'redirect_url' => '/buy-token', 
					'transaction_amount' => $curr[0],
					'currency' => $curr[1]
				);	

				$request = $client->request('POST', $url, [
					'headers' =>  [
						'merchant_key' => env('FOLOOSI_MERCHANT_KEY'),
					],
					'form_params' => $myBody
				]);

				$response = json_decode($request->getBody(), true);
				$response_data = $response['data'];

				if ($curr[1] == 'USD') {
					return view('buy-token', [
						'bal_amt' => $r['bal'],
						'user_reference_id' => strtotime('now').''.generateRandomString(3), 
						'response' => $response_data['reference_token'],
						'curr' => 'credit',
						'amt' => $r['currency'],
						'amount' => $curr[0],
						'dcurr' => $curr[1],
						'rand' => generateRandomString(4),
						'usd' => 1,
						'code' => $code
					]);
				} else {
					return view('buy-token', [
						'bal_amt' => $r['bal'],
						'user_reference_id' => strtotime('now').''.generateRandomString(3), 
						'response' => $response_data['reference_token'],
						'curr' => 'credit',
						'amt' => $r['currency'],
						'amount' => $curr[0],
						'dcurr' => $curr[1],
						'rand' => generateRandomString(4),
						'usd' => 0,
						'code' => $code
					]);

				}
			} else {
				if ($curr[1] == 'USD') {
					return view('buy-token', [
						'bal_amt' => $r['bal'],
						'user_reference_id' => strtotime('now').''.generateRandomString(3), 
						'curr' => 'nocredit',
						'amt' => $r['currency'],
						'amount' => $curr[0],
						'dcurr' => $curr[1],
						'rand' => generateRandomString(4),
						'usd' => 1,
						'code' => $code
					]);
				} else {
					return view('buy-token', [
						'bal_amt' => $r['bal'],
						'user_reference_id' => strtotime('now').''.generateRandomString(3), 
						'curr' => 'nocredit',
						'amt' => $r['currency'],
						'amount' => $curr[0],
						'dcurr' => $curr[1],
						'rand' => generateRandomString(4),
						'usd' => 0,
						'code' => $code

					]);
				}
			}
		} elseif ($curr[1] == 'BTC') {
			return view('buy-token', [
				'bal_amt' => $r['bal'],
				'user_reference_id' => strtotime('now').''.generateRandomString(3), 
				'amt' => $curr[0],
				'curr' => 'BTC',
				'code' => $code
			]);
		} else {
			return view('buy-token', [
				'bal_amt' => $r['bal'],
				'user_reference_id' => strtotime('now').''.generateRandomString(3),
				'amt' => $curr[0],
				'curr' => 'ETH',
				'code' => $code

			]);
		}

	}


	public function kyc_post(Request $request){

		// dd($request);

		$countries = [
  			"Afghanistan",
  			"Albania",
			"Algeria",
			"American Samoa",
			"Andorra",
			"Angola",
			"Anguilla",
			"Antarctica",
			"Antigua and Barbuda",
			"Argentina",
			"Armenia",
			"Aruba",
			"Australia",
			"Austria",
			"Azerbaijan",
			"Bahamas",
			"Bahrain",
			"Bangladesh",
			"Barbados",
			"Belarus",
			"Belgium",
			"Belize",
			"Benin",
			"Bermuda",
			"Bhutan",
			"Bolivia",
			"Bosnia and Herzegovina",
			"Botswana",
			"Bouvet Island",
			"Brazil",
			"British Indian Ocean Territory",
			"Brunei",
			"Bulgaria",
			"Burkina Faso",
			"Burundi",
			"Cambodia",
			"Cameroon",
			"Canada",
			"Cape Verde",
			"Cayman Islands",
			"Central African Republic",
			"Chad",
			"Chile",
			"China",
			"Christmas Island",
			"Cocos (Keeling) Islands",
			"Colombia",
			"Comoros",
			"Congo",
			"The Democratic Republic of Congo",
			"Cook Islands",
			"Costa Rica",
			"Ivory Coast",
			"Croatia",
			"Cuba",
			"Cyprus",
			"Czech Republic",
			"Denmark",
			"Djibouti",
			"Dominica",
			"Dominican Republic",
			"East Timor",
			"Ecuador",
			"Egypt",
			"England",
			"El Salvador",
			"Equatorial Guinea",
			"Eritrea",
			"Estonia",
			"Ethiopia",
			"Falkland Islands",
			"Faroe Islands",
			"Fiji Islands",
			"Finland",
			"France",
			"French Guiana",
			"French Polynesia",
			"French Southern territories",
			"Gabon",
			 "Gambia",
			"Georgia",
			 "Germany",
			"Ghana",
			"Gibraltar",
			"Greece",
			"Greenland",
			"Grenada",
			"Guadeloupe",
			"Guam",
			"Guatemala",
			"Guinea",
			"Guinea-Bissau",
			"Guyana",
			"Haiti",
			"Heard Island and McDonald Islands",
			"Holy See (Vatican City State)",
			"Honduras",
			"Hong Kong",
			"Hungary",
			"Iceland",
			"India",
			"Indonesia",
      		"Iran",
      		"Iraq",
      		"Ireland",
      		"Israel",
      		"Italy",
      		"Jamaica",
      		"Japan",
      		"Jordan",
      		"Kazakstan",
      		"Kenya",
      		"Kiribati",
      		"Kuwait",
      		"Kyrgyzstan",
      		"Laos",
      		"Latvia",
      		"Lebanon",
      		"Lesotho",
      		"Liberia",
      		"Libyan Arab Jamahiriya",
      		"Liechtenstein",
      		"Lithuania",
      		"Luxembourg",
      		"Macao",
      		"North Macedonia",
      		"Madagascar",
      		"Malawi",
      		"Malaysia",
      		"Maldives",
      		"Mali",
      		"Malta",
      		"Marshall Islands",
      		"Martinique",
      		"Mauritania",
      		"Mauritius",
      		"Mayotte",
      		"Mexico",
      		"Microne, Federated States of",
      		"Moldova",
      		"Monaco",
      		"Mongolia",
      		"Montserrat",
      		"Morocco",
      		"Mozambique",
      		"Myanmar",
      		"Namibia",
      		"Nauru",
      		"Nepal",
      		"Netherlands",
      		"Netherlands Antilles",
      		"New Caledonia",
      		"New Zealand",
      		"Nicaragua",
      		"Niger",
      		"Nigeria",
      		"Niue",
      		"Norfolk Island",
      		"North Korea",
      		"Northern Ireland",
      		"Northern Mariana Islands",
      		"Norway",
      		"Oman",
      		"Pakistan",
      		"Palau",
      		"Palestine",
      		"Panama",
      		"Papua New Guinea",
      		"Paraguay",
      		"Peru",
      		"Philippines",
      		"Pitcairn",
      		"Poland",
      		"Portugal",
      		"Puerto Rico",
      		"Qatar",
      		"Reunion",
      		"Romania",
      		"Russian Federation",
      		"Rwanda",
      		"Saint Helena",
      		"Saint Kitts and Nevis",
      		"Saint Lucia",
      		"Saint Pierre and Miquelon",
      		"Saint Vincent and the Grenadines",
      		"Samoa",
      		"San Marino",
      		"Sao Tome and Principe",
      		"Saudi Arabia",
      		"Scotland",
      		"Senegal",
      		"Seychelles",
      		"Sierra Leone",
      		"Singapore",
      		"Slovakia",
      		"Slovenia",
      		"Solomon Islands",
      		"Somalia",
      		"South Africa",
      		"South Georgia and the South Sandwich Islands",
      		"South Korea",
      		"South Sudan",
      		"Spain",
      		"SriLanka",
      		"Sudan",
      		"Suriname",
      		"Svalbard and Jan Mayen",
      		"Swaziland",
      		"Sweden",
      		"Switzerland",
      		"Syria",
      		"Tajikistan",
      		"Tanzania",
      		"Thailand",
      		"Togo",
      		"Tokelau",
      		"Tonga",
      		"Trinidad and Tobago",
      		"Tunisia",
      		"Turkey",
      		"Turkmenistan",
      		"Turks and Caicos Islands",
      		"Tuvalu",
      		"Uganda",
      		"Ukraine",
      		"United Arab Emirates",
      		"United Kingdom",
      		"United States",
      		"United States Minor Outlying Islands",
      		"Uruguay",
      		"Uzbekistan",
      		"Vanuatu",
      		"Venezuela",
      		"Vietnam",
      		"Virgin Islands, British",
      		"Virgin Islands, U.S.",
      		"Wales",
      		"Wallis and Futuna",
      		"Western Sahara",
      		"Yemen",
      		"Yugoslavia",
      		"Zambia",
      		"Zimbabwe"
		];


		if (!empty($request['referral_code'])) {
			$code = $request['referral_code'];
		} else {
			$code = '';
		}


		$bal_amt = str_replace( ',', '', $request['bal_amt']);


		// dd($request['reference']);

		if ($request['transaction_id'] == null) {

			if ($request['reference'] == null) {
				$transaction = $request->validate([
	            	'receiver_id' => 'required',
	            	'amount' => 'required',
	            	'email_id' => 'required', 
	            	'name' => 'required',
	            	'user_reference_id' => 'required',
	            	'bal_amt' => 'required',
	            	'number' => 'required',
	        	]);
	        	
				$email_details =  array(
					'amount' => $transaction['amount'],
					'receiver_id' => $transaction['receiver_id'],
					'email_id' => $transaction['email_id'],
					'name' => $transaction['name'],
	            	'user_reference_id' => $transaction['user_reference_id'],	
	            	'bal_amt' => $bal_amt,
	            	'number' => $transaction['number'],
	            	'countries' => $countries,
	            	'referred_code' => $code,
	            	'is_verified' => 'No'
	            
				);

			} else {
				if ($request['later_bank'] !== null ) {
					# code...
				$transaction = $request->validate([
	            	'receiver_id' => 'required',
	            	'amount' => 'required',
	            	'email_id' => 'required', 
	            	'name' => 'required',
	            	'reference' => 'required',
	            	'user_reference_id' => 'required',
	            	'bal_amt' => 'required',
	            	'number' => 'required',
	            	'later_bank' => 'required',
	        	]);



				$email_details = array(
					'amount' => $transaction['amount'],
					'receiver_id' => $transaction['receiver_id'],
					'email_id' => $transaction['email_id'],
					'name' => $transaction['name'],
					'reference' => $transaction['reference'],
	            	'user_reference_id' => $transaction['user_reference_id'],	
	            	'bal_amt' => $bal_amt,
	            	'number' => $transaction['number'],
	            	'later_bank' => $transaction['later_bank'],
	            	'countries' => $countries,
	            	'referred_code' => $code,
	            	'is_verified' => 'No'	
				);
			} else {
					$transaction = $request->validate([
	            	'receiver_id' => 'required',
	            	'amount' => 'required',
	            	'email_id' => 'required', 
	            	'name' => 'required',
	            	'reference' => 'required',
	            	'user_reference_id' => 'required',
	            	'bal_amt' => 'required',
	            	'number' => 'required',
	        	]);

				$email_details = array(
					'amount' => $transaction['amount'],
					'receiver_id' => $transaction['receiver_id'],
					'email_id' => $transaction['email_id'],
					'name' => $transaction['name'],
					'reference' => $transaction['reference'],
	            	'user_reference_id' => $transaction['user_reference_id'],	
	            	'bal_amt' => $bal_amt,
	            	'number' => $transaction['number'],
	            	'countries' => $countries,
	            	'referred_code' => $code,
	            	'is_verified' => 'No'
				);
				}
			}

		} else {

			$transaction = $request->validate([
            	'transaction_id' => 'required',
            	'receiver_id' => 'required',
            	'amount' => 'required',
            	'email_id' => 'required', 
            	'name' => 'required',
	            'user_reference_id' => 'required',
	            'bal_amt' => 'required',
	            'number' => 'required',
        	]);

			$email_details = array(
				'amount' => $transaction['amount'],
				'transaction_id' => $transaction['transaction_id'],
				'receiver_id' => $transaction['receiver_id'],
				'email_id' => $transaction['email_id'],
				'name' => $transaction['name'],
	            'user_reference_id' => $transaction['user_reference_id'],
	            'bal_amt' => $bal_amt,
	            'number' => $transaction['number'],
	            'countries' => $countries,
	            'referred_code' => $code,
	            'is_verified' => 'No'
			);

		}

			// dd($email_details);
			TokenBuyer::create($email_details);


	        \Mail::to('info@buyanylight.com')->send(new BuyingConfirmationAdmin($request));


	        \Mail::to($request->get('email_id'))->send(new BuyingConfirmation($request));




		// dd($transaction['email_id']);


		return view('kyc', $email_details);
	}

		public function kyc_get(){

		// dd(session()->get('data'));

		$countries = [
  			"Afghanistan",
  			"Albania",
			"Algeria",
			"American Samoa",
			"Andorra",
			"Angola",
			"Anguilla",
			"Antarctica",
			"Antigua and Barbuda",
			"Argentina",
			"Armenia",
			"Aruba",
			"Australia",
			"Austria",
			"Azerbaijan",
			"Bahamas",
			"Bahrain",
			"Bangladesh",
			"Barbados",
			"Belarus",
			"Belgium",
			"Belize",
			"Benin",
			"Bermuda",
			"Bhutan",
			"Bolivia",
			"Bosnia and Herzegovina",
			"Botswana",
			"Bouvet Island",
			"Brazil",
			"British Indian Ocean Territory",
			"Brunei",
			"Bulgaria",
			"Burkina Faso",
			"Burundi",
			"Cambodia",
			"Cameroon",
			"Canada",
			"Cape Verde",
			"Cayman Islands",
			"Central African Republic",
			"Chad",
			"Chile",
			"China",
			"Christmas Island",
			"Cocos (Keeling) Islands",
			"Colombia",
			"Comoros",
			"Congo",
			"The Democratic Republic of Congo",
			"Cook Islands",
			"Costa Rica",
			"Ivory Coast",
			"Croatia",
			"Cuba",
			"Cyprus",
			"Czech Republic",
			"Denmark",
			"Djibouti",
			"Dominica",
			"Dominican Republic",
			"East Timor",
			"Ecuador",
			"Egypt",
			"England",
			"El Salvador",
			"Equatorial Guinea",
			"Eritrea",
			"Estonia",
			"Ethiopia",
			"Falkland Islands",
			"Faroe Islands",
			"Fiji Islands",
			"Finland",
			"France",
			"French Guiana",
			"French Polynesia",
			"French Southern territories",
			"Gabon",
			 "Gambia",
			"Georgia",
			 "Germany",
			"Ghana",
			"Gibraltar",
			"Greece",
			"Greenland",
			"Grenada",
			"Guadeloupe",
			"Guam",
			"Guatemala",
			"Guinea",
			"Guinea-Bissau",
			"Guyana",
			"Haiti",
			"Heard Island and McDonald Islands",
			"Holy See (Vatican City State)",
			"Honduras",
			"Hong Kong",
			"Hungary",
			"Iceland",
			"India",
			"Indonesia",
      		"Iran",
      		"Iraq",
      		"Ireland",
      		"Israel",
      		"Italy",
      		"Jamaica",
      		"Japan",
      		"Jordan",
      		"Kazakstan",
      		"Kenya",
      		"Kiribati",
      		"Kuwait",
      		"Kyrgyzstan",
      		"Laos",
      		"Latvia",
      		"Lebanon",
      		"Lesotho",
      		"Liberia",
      		"Libyan Arab Jamahiriya",
      		"Liechtenstein",
      		"Lithuania",
      		"Luxembourg",
      		"Macao",
      		"North Macedonia",
      		"Madagascar",
      		"Malawi",
      		"Malaysia",
      		"Maldives",
      		"Mali",
      		"Malta",
      		"Marshall Islands",
      		"Martinique",
      		"Mauritania",
      		"Mauritius",
      		"Mayotte",
      		"Mexico",
      		"Microne, Federated States of",
      		"Moldova",
      		"Monaco",
      		"Mongolia",
      		"Montserrat",
      		"Morocco",
      		"Mozambique",
      		"Myanmar",
      		"Namibia",
      		"Nauru",
      		"Nepal",
      		"Netherlands",
      		"Netherlands Antilles",
      		"New Caledonia",
      		"New Zealand",
      		"Nicaragua",
      		"Niger",
      		"Nigeria",
      		"Niue",
      		"Norfolk Island",
      		"North Korea",
      		"Northern Ireland",
      		"Northern Mariana Islands",
      		"Norway",
      		"Oman",
      		"Pakistan",
      		"Palau",
      		"Palestine",
      		"Panama",
      		"Papua New Guinea",
      		"Paraguay",
      		"Peru",
      		"Philippines",
      		"Pitcairn",
      		"Poland",
      		"Portugal",
      		"Puerto Rico",
      		"Qatar",
      		"Reunion",
      		"Romania",
      		"Russian Federation",
      		"Rwanda",
      		"Saint Helena",
      		"Saint Kitts and Nevis",
      		"Saint Lucia",
      		"Saint Pierre and Miquelon",
      		"Saint Vincent and the Grenadines",
      		"Samoa",
      		"San Marino",
      		"Sao Tome and Principe",
      		"Saudi Arabia",
      		"Scotland",
      		"Senegal",
      		"Seychelles",
      		"Sierra Leone",
      		"Singapore",
      		"Slovakia",
      		"Slovenia",
      		"Solomon Islands",
      		"Somalia",
      		"South Africa",
      		"South Georgia and the South Sandwich Islands",
      		"South Korea",
      		"South Sudan",
      		"Spain",
      		"SriLanka",
      		"Sudan",
      		"Suriname",
      		"Svalbard and Jan Mayen",
      		"Swaziland",
      		"Sweden",
      		"Switzerland",
      		"Syria",
      		"Tajikistan",
      		"Tanzania",
      		"Thailand",
      		"Togo",
      		"Tokelau",
      		"Tonga",
      		"Trinidad and Tobago",
      		"Tunisia",
      		"Turkey",
      		"Turkmenistan",
      		"Turks and Caicos Islands",
      		"Tuvalu",
      		"Uganda",
      		"Ukraine",
      		"United Arab Emirates",
      		"United Kingdom",
      		"United States",
      		"United States Minor Outlying Islands",
      		"Uruguay",
      		"Uzbekistan",
      		"Vanuatu",
      		"Venezuela",
      		"Vietnam",
      		"Virgin Islands, British",
      		"Virgin Islands, U.S.",
      		"Wales",
      		"Wallis and Futuna",
      		"Western Sahara",
      		"Yemen",
      		"Yugoslavia",
      		"Zambia",
      		"Zimbabwe"
		];



		// dd($request['reference']);

			// dd($email_details);

	

		// dd($transaction['email_id']);


		return view('kyc', [
			'user_reference_id' => session()->get('data')['user_reference_id'], 
			'name' => session()->get('data')['name'],
			'email_id' => session()->get('data')['email_id'],
			'receiver_id' => session()->get('data')['receiver_id'],
			'bal_amt' => session()->get('data')['bal_amt'],
			'amount' => session()->get('data')['amount'],
			'number' => session()->get('data')['number'],
			'countries' => session()->get('data')['countries'],
			'later_bank' => (!empty(session()->get('data')['later_bank'])) ? session()->get('data')['later_bank'] : '',
			'reference' => (!empty(session()->get('data')['reference'])) ? session()->get('data')['reference']: '',



		]);
	}

	public function kyc_form(string $uid) {


		// dd($_GET);
		// dd($uid);


		$countries = [
  			"Afghanistan",
  			"Albania",
			"Algeria",
			"American Samoa",
			"Andorra",
			"Angola",
			"Anguilla",
			"Antarctica",
			"Antigua and Barbuda",
			"Argentina",
			"Armenia",
			"Aruba",
			"Australia",
			"Austria",
			"Azerbaijan",
			"Bahamas",
			"Bahrain",
			"Bangladesh",
			"Barbados",
			"Belarus",
			"Belgium",
			"Belize",
			"Benin",
			"Bermuda",
			"Bhutan",
			"Bolivia",
			"Bosnia and Herzegovina",
			"Botswana",
			"Bouvet Island",
			"Brazil",
			"British Indian Ocean Territory",
			"Brunei",
			"Bulgaria",
			"Burkina Faso",
			"Burundi",
			"Cambodia",
			"Cameroon",
			"Canada",
			"Cape Verde",
			"Cayman Islands",
			"Central African Republic",
			"Chad",
			"Chile",
			"China",
			"Christmas Island",
			"Cocos (Keeling) Islands",
			"Colombia",
			"Comoros",
			"Congo",
			"The Democratic Republic of Congo",
			"Cook Islands",
			"Costa Rica",
			"Ivory Coast",
			"Croatia",
			"Cuba",
			"Cyprus",
			"Czech Republic",
			"Denmark",
			"Djibouti",
			"Dominica",
			"Dominican Republic",
			"East Timor",
			"Ecuador",
			"Egypt",
			"England",
			"El Salvador",
			"Equatorial Guinea",
			"Eritrea",
			"Estonia",
			"Ethiopia",
			"Falkland Islands",
			"Faroe Islands",
			"Fiji Islands",
			"Finland",
			"France",
			"French Guiana",
			"French Polynesia",
			"French Southern territories",
			"Gabon",
			 "Gambia",
			"Georgia",
			 "Germany",
			"Ghana",
			"Gibraltar",
			"Greece",
			"Greenland",
			"Grenada",
			"Guadeloupe",
			"Guam",
			"Guatemala",
			"Guinea",
			"Guinea-Bissau",
			"Guyana",
			"Haiti",
			"Heard Island and McDonald Islands",
			"Holy See (Vatican City State)",
			"Honduras",
			"Hong Kong",
			"Hungary",
			"Iceland",
			"India",
			"Indonesia",
      		"Iran",
      		"Iraq",
      		"Ireland",
      		"Israel",
      		"Italy",
      		"Jamaica",
      		"Japan",
      		"Jordan",
      		"Kazakstan",
      		"Kenya",
      		"Kiribati",
      		"Kuwait",
      		"Kyrgyzstan",
      		"Laos",
      		"Latvia",
      		"Lebanon",
      		"Lesotho",
      		"Liberia",
      		"Libyan Arab Jamahiriya",
      		"Liechtenstein",
      		"Lithuania",
      		"Luxembourg",
      		"Macao",
      		"North Macedonia",
      		"Madagascar",
      		"Malawi",
      		"Malaysia",
      		"Maldives",
      		"Mali",
      		"Malta",
      		"Marshall Islands",
      		"Martinique",
      		"Mauritania",
      		"Mauritius",
      		"Mayotte",
      		"Mexico",
      		"Microne, Federated States of",
      		"Moldova",
      		"Monaco",
      		"Mongolia",
      		"Montserrat",
      		"Morocco",
      		"Mozambique",
      		"Myanmar",
      		"Namibia",
      		"Nauru",
      		"Nepal",
      		"Netherlands",
      		"Netherlands Antilles",
      		"New Caledonia",
      		"New Zealand",
      		"Nicaragua",
      		"Niger",
      		"Nigeria",
      		"Niue",
      		"Norfolk Island",
      		"North Korea",
      		"Northern Ireland",
      		"Northern Mariana Islands",
      		"Norway",
      		"Oman",
      		"Pakistan",
      		"Palau",
      		"Palestine",
      		"Panama",
      		"Papua New Guinea",
      		"Paraguay",
      		"Peru",
      		"Philippines",
      		"Pitcairn",
      		"Poland",
      		"Portugal",
      		"Puerto Rico",
      		"Qatar",
      		"Reunion",
      		"Romania",
      		"Russian Federation",
      		"Rwanda",
      		"Saint Helena",
      		"Saint Kitts and Nevis",
      		"Saint Lucia",
      		"Saint Pierre and Miquelon",
      		"Saint Vincent and the Grenadines",
      		"Samoa",
      		"San Marino",
      		"Sao Tome and Principe",
      		"Saudi Arabia",
      		"Scotland",
      		"Senegal",
      		"Seychelles",
      		"Sierra Leone",
      		"Singapore",
      		"Slovakia",
      		"Slovenia",
      		"Solomon Islands",
      		"Somalia",
      		"South Africa",
      		"South Georgia and the South Sandwich Islands",
      		"South Korea",
      		"South Sudan",
      		"Spain",
      		"SriLanka",
      		"Sudan",
      		"Suriname",
      		"Svalbard and Jan Mayen",
      		"Swaziland",
      		"Sweden",
      		"Switzerland",
      		"Syria",
      		"Tajikistan",
      		"Tanzania",
      		"Thailand",
      		"Togo",
      		"Tokelau",
      		"Tonga",
      		"Trinidad and Tobago",
      		"Tunisia",
      		"Turkey",
      		"Turkmenistan",
      		"Turks and Caicos Islands",
      		"Tuvalu",
      		"Uganda",
      		"Ukraine",
      		"United Arab Emirates",
      		"United Kingdom",
      		"United States",
      		"United States Minor Outlying Islands",
      		"Uruguay",
      		"Uzbekistan",
      		"Vanuatu",
      		"Venezuela",
      		"Vietnam",
      		"Virgin Islands, British",
      		"Virgin Islands, U.S.",
      		"Wales",
      		"Wallis and Futuna",
      		"Western Sahara",
      		"Yemen",
      		"Yugoslavia",
      		"Zambia",
      		"Zimbabwe"
		];


		return view('demo', [
			'countries' => $countries,
			'user_reference_id' => $uid,
			'amount' => $_GET['amount'],
			'bal_amt' => $_GET['bal'],
			'name' => $_GET['name'],
			'email' => $_GET['email'],
			'receiver_id' => $_GET['receiver_id'],
			'number' => $_GET['number'],
		]);

	}


	public function kyc_confirm(Request $request){

		// 	dd($request);


		// 	dd($request->validate([
  //           'user_name' => ['required', 'min:3'],
  //           'email_id' => ['required', 'min:3'],
  //           'country' => ['required'],
  //           'receiver_id' => ['required'],
  //           'bal_amt' => ['required'],
  //           'amount' => ['required'],
  //           'number' => ['required'],
  //           'later_bank' => (!empty($request->get('later_bank'))) ? ['required'] : '',
  //           'reference' => (!empty($request->get('reference'))) ? ['required'] : '',
  //           'user_id' => 'required|mimetypes:image/jpeg',
  //           'user_selfie_id' => ['required', 'mimes:jpeg,png,pdf', 'max:7168'],
  //           'user_reference_id' => ['required']
  //       ]));



		// $validated_attr = $request->validate([
  //           'user_name' => ['required', 'min:3'],
  //           'email_id' => ['required', 'min:3'],
  //           'country' => ['required'],
  //           'receiver_id' => ['required'],
  //           'bal_amt' => ['required'],
  //           'amount' => ['required'],
  //           'number' => ['required'],
  //           'later_bank' => (!empty($request->get('later_bank'))) ? ['required'] : '',
  //           'reference' => (!empty($request->get('reference'))) ? ['required'] : '',
  //           'user_id' => 'required|mimetypes:image/jpeg',
  //           'user_selfie_id' => ['required', 'mimes:jpeg,png,pdf', 'max:7168'],
  //           'user_reference_id' => ['required']
  //       ]);

		// dd($validated_attr);

		$countries = [
  			"Afghanistan",
  			"Albania",
			"Algeria",
			"American Samoa",
			"Andorra",
			"Angola",
			"Anguilla",
			"Antarctica",
			"Antigua and Barbuda",
			"Argentina",
			"Armenia",
			"Aruba",
			"Australia",
			"Austria",
			"Azerbaijan",
			"Bahamas",
			"Bahrain",
			"Bangladesh",
			"Barbados",
			"Belarus",
			"Belgium",
			"Belize",
			"Benin",
			"Bermuda",
			"Bhutan",
			"Bolivia",
			"Bosnia and Herzegovina",
			"Botswana",
			"Bouvet Island",
			"Brazil",
			"British Indian Ocean Territory",
			"Brunei",
			"Bulgaria",
			"Burkina Faso",
			"Burundi",
			"Cambodia",
			"Cameroon",
			"Canada",
			"Cape Verde",
			"Cayman Islands",
			"Central African Republic",
			"Chad",
			"Chile",
			"China",
			"Christmas Island",
			"Cocos (Keeling) Islands",
			"Colombia",
			"Comoros",
			"Congo",
			"The Democratic Republic of Congo",
			"Cook Islands",
			"Costa Rica",
			"Ivory Coast",
			"Croatia",
			"Cuba",
			"Cyprus",
			"Czech Republic",
			"Denmark",
			"Djibouti",
			"Dominica",
			"Dominican Republic",
			"East Timor",
			"Ecuador",
			"Egypt",
			"England",
			"El Salvador",
			"Equatorial Guinea",
			"Eritrea",
			"Estonia",
			"Ethiopia",
			"Falkland Islands",
			"Faroe Islands",
			"Fiji Islands",
			"Finland",
			"France",
			"French Guiana",
			"French Polynesia",
			"French Southern territories",
			"Gabon",
			 "Gambia",
			"Georgia",
			 "Germany",
			"Ghana",
			"Gibraltar",
			"Greece",
			"Greenland",
			"Grenada",
			"Guadeloupe",
			"Guam",
			"Guatemala",
			"Guinea",
			"Guinea-Bissau",
			"Guyana",
			"Haiti",
			"Heard Island and McDonald Islands",
			"Holy See (Vatican City State)",
			"Honduras",
			"Hong Kong",
			"Hungary",
			"Iceland",
			"India",
			"Indonesia",
      		"Iran",
      		"Iraq",
      		"Ireland",
      		"Israel",
      		"Italy",
      		"Jamaica",
      		"Japan",
      		"Jordan",
      		"Kazakstan",
      		"Kenya",
      		"Kiribati",
      		"Kuwait",
      		"Kyrgyzstan",
      		"Laos",
      		"Latvia",
      		"Lebanon",
      		"Lesotho",
      		"Liberia",
      		"Libyan Arab Jamahiriya",
      		"Liechtenstein",
      		"Lithuania",
      		"Luxembourg",
      		"Macao",
      		"North Macedonia",
      		"Madagascar",
      		"Malawi",
      		"Malaysia",
      		"Maldives",
      		"Mali",
      		"Malta",
      		"Marshall Islands",
      		"Martinique",
      		"Mauritania",
      		"Mauritius",
      		"Mayotte",
      		"Mexico",
      		"Microne, Federated States of",
      		"Moldova",
      		"Monaco",
      		"Mongolia",
      		"Montserrat",
      		"Morocco",
      		"Mozambique",
      		"Myanmar",
      		"Namibia",
      		"Nauru",
      		"Nepal",
      		"Netherlands",
      		"Netherlands Antilles",
      		"New Caledonia",
      		"New Zealand",
      		"Nicaragua",
      		"Niger",
      		"Nigeria",
      		"Niue",
      		"Norfolk Island",
      		"North Korea",
      		"Northern Ireland",
      		"Northern Mariana Islands",
      		"Norway",
      		"Oman",
      		"Pakistan",
      		"Palau",
      		"Palestine",
      		"Panama",
      		"Papua New Guinea",
      		"Paraguay",
      		"Peru",
      		"Philippines",
      		"Pitcairn",
      		"Poland",
      		"Portugal",
      		"Puerto Rico",
      		"Qatar",
      		"Reunion",
      		"Romania",
      		"Russian Federation",
      		"Rwanda",
      		"Saint Helena",
      		"Saint Kitts and Nevis",
      		"Saint Lucia",
      		"Saint Pierre and Miquelon",
      		"Saint Vincent and the Grenadines",
      		"Samoa",
      		"San Marino",
      		"Sao Tome and Principe",
      		"Saudi Arabia",
      		"Scotland",
      		"Senegal",
      		"Seychelles",
      		"Sierra Leone",
      		"Singapore",
      		"Slovakia",
      		"Slovenia",
      		"Solomon Islands",
      		"Somalia",
      		"South Africa",
      		"South Georgia and the South Sandwich Islands",
      		"South Korea",
      		"South Sudan",
      		"Spain",
      		"SriLanka",
      		"Sudan",
      		"Suriname",
      		"Svalbard and Jan Mayen",
      		"Swaziland",
      		"Sweden",
      		"Switzerland",
      		"Syria",
      		"Tajikistan",
      		"Tanzania",
      		"Thailand",
      		"Togo",
      		"Tokelau",
      		"Tonga",
      		"Trinidad and Tobago",
      		"Tunisia",
      		"Turkey",
      		"Turkmenistan",
      		"Turks and Caicos Islands",
      		"Tuvalu",
      		"Uganda",
      		"Ukraine",
      		"United Arab Emirates",
      		"United Kingdom",
      		"United States",
      		"United States Minor Outlying Islands",
      		"Uruguay",
      		"Uzbekistan",
      		"Vanuatu",
      		"Venezuela",
      		"Vietnam",
      		"Virgin Islands, British",
      		"Virgin Islands, U.S.",
      		"Wales",
      		"Wallis and Futuna",
      		"Western Sahara",
      		"Yemen",
      		"Yugoslavia",
      		"Zambia",
      		"Zimbabwe"
		];


		$validator = Validator::make($request->all(), [
            'user_name' => ['required', 'min:3'],
            'email_id' => ['required'],
            'country' => ['required'],
            'receiver_id' => ['required'],
            'bal_amt' => ['required'],
            'amount' => ['required'],
            'number' => ['required'],
            'later_bank' => (!empty($request->get('later_bank'))) ? ['required'] : '',
            'reference' => (!empty($request->get('reference'))) ? ['required'] : '',
            'user_id_pic' => 'required|mimes:png,jpg,jpeg,pdf|max:5120',
            'selfie_id_pic' => 'required|mimes:png,jpg,jpeg,pdf|max:5120',
            'user_reference_id' => ['required']
        ]);

        $data_get = [
       		'user_reference_id' => $request['user_reference_id'],
       		'name' => $request['user_name'],
       		'email_id' => $request['email_id'],
       		'receiver_id' => $request['receiver_id'],
       		'bal_amt' => $request['bal_amt'],
       		'amount' => $request['amount'],
       		'number' => $request['number'],
       		'countries' => $countries,
       		'later_bank' => (!empty($request->get('later_bank'))) ? 1 : '',
       		'reference' => (!empty($request->get('reference'))) ? 1 : '',	
        ];



        function generateRandomString($length) {
    		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    		$charactersLength = strlen($characters);
    		$randomString = '';
    		for ($i = 0; $i < $length; $i++) {
        		$randomString .= $characters[rand(0, $charactersLength - 1)];
    		}
    		return $randomString;
		}

		$passwordString = generateRandomString(6);


        $data = [
       		'user_reference_id' => $request['user_reference_id'],
       		'user_name' => $request['user_name'],
       		'email_id' => $request['email_id'],
       		'receiver_id' => $request['receiver_id'],
       		'bal_amt' => $request['bal_amt'],
       		'amount' => $request['amount'],
       		'number' => $request['number'],
       		'country' => $request['country'],
       		'later_bank' => (!empty($request->get('later_bank'))) ? 1 : '',
       		'reference' => (!empty($request->get('reference'))) ? 1 : '',
       		'password' => $passwordString,	
       		'user_id_pic' => $request['user_id_pic'],
       		'selfie_id_pic' => $request['selfie_id_pic'],
        ];

        
        if (request()->hasFile('selfie_id_pic')) {
            $name = explode(' ', request()->user_name);
            $selfie_file_name = date('YmdHis') . '-' .$name[0].'-'.request()->file('selfie_id_pic')->getClientOriginalName();
          
        }

        if (request()->hasFile('user_id_pic')) {
            $name = explode(' ', request()->user_name);
            $file_name = date('YmdHis') . '-' .$name[0].'-'. request()->file('user_id_pic')->getClientOriginalName();
          
        }


		// dd(request()->file('selfie_id_pic')->getClientOriginalName());


        if ($validator->fails()) {

			// dd($validator->customMessages);

            return redirect('/kyc')
                        ->withErrors($validator->errors())
                        ->with(['data' => $data_get]);
        } else {
        	
       
	      	TokenBuyer::where('user_reference_id', 'LIKE', '%'. $request['user_reference_id'].'%')->update([
	      		'user_id_pic' => $file_name,
	      		'selfie_id_pic' => $selfie_file_name,
	      		'country' => $request['country'],
	      	]);


	      	$request['password'] = $passwordString;

        	\Mail::to($request->get('email_id'))->send(new KYCConfirmation($request));

        	\Mail::to('info@buyanylight.com')->send(new KYCConfirmationAdmin($request));

        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

 		if($isMobile || $isTablet) {
				return view('mobile.thank-you',[
					'u_details' => $data
				]);
			}else{
	       		return view('/thank-you',[
	       			'u_details' => $data
	       		]);

			}

        }

	}

}
