<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

// use Illuminate\Support\Facades\Mail;
use App\Mail\BuyingConfirmation;
use App\Mail\BuyingConfirmationAdmin;
use App\Mail\KYCConfirmation;
use App\Mail\KYCConfirmationAdmin;


class TokenController extends Controller
{
	public function token_info(){
		$curr = $this->GetApi('https://rest.coinapi.io/v1/exchangerate/USD?apikey=B307BEFD-28DE-499C-942C-DBC5C463B1A1');

		$curr_result = json_decode($curr, true);
	
		// dd($curr_result);

		foreach ($curr_result['rates'] as $tkey => $tvalue) {
			if ($tvalue['asset_id_quote'] == 'EUR' || $tvalue['asset_id_quote'] == 'BTC' ||  $tvalue['asset_id_quote'] == 'ETH' ||  $tvalue['asset_id_quote'] == 'USD') {
				$all_curr[$tkey] = $tvalue;
				$all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 5, 8);
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

		usort($all_curr, function($a, $b) {
   			 return $a['rank'] <=> $b['rank'];
		});



		$agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

 		if($isMobile || $isTablet) {
            return view('mobile.ieo', [
				'tokens' => $all_curr

            ]);
        } else {
            return view('ieo', [
				'tokens' => $all_curr

            ]);
        }
	}


	public function token_info_code(){
		$curr = $this->GetApi('https://rest.coinapi.io/v1/exchangerate/USD?apikey=B307BEFD-28DE-499C-942C-DBC5C463B1A1');

		$curr_result = json_decode($curr, true);
	
		// dd($curr_result);

		foreach ($curr_result['rates'] as $tkey => $tvalue) {
			if ($tvalue['asset_id_quote'] == 'EUR' || $tvalue['asset_id_quote'] == 'BTC' ||  $tvalue['asset_id_quote'] == 'ETH' ||  $tvalue['asset_id_quote'] == 'USD') {
				$all_curr[$tkey] = $tvalue;
				$all_curr[$tkey]['bal_rate'] = number_format($tvalue['rate'] / 5, 8);
				$all_curr[$tkey]['time'] = date('d-M-y H:i', strtotime($all_curr[$tkey]['time'])) . ' UTC' ;
			}

			if ($tvalue['asset_id_quote'] == 'EUR'){
				$all_curr[$tkey]['logo'] = '<i class="fas fa-euro-sign"></i>';
				$all_curr[$tkey]['symbol'] = 'Euro';
			}
			if ($tvalue['asset_id_quote'] == 'USD'){
				$all_curr[$tkey]['logo'] = '<i class="fas fa-dollar-sign"></i>';
				$all_curr[$tkey]['symbol'] = 'US Dollar';
			}
			if ($tvalue['asset_id_quote'] == 'BTC'){
				$all_curr[$tkey]['logo'] = '<i class="fab fa-bitcoin"></i>';	
				$all_curr[$tkey]['symbol'] = 'Bitcoin';
			}
			if ($tvalue['asset_id_quote'] == 'ETH'){
				$all_curr[$tkey]['logo'] = '<i class="fab fa-ethereum"></i>';
				$all_curr[$tkey]['symbol'] = 'Ethereum';
			}

		}


		 $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();

 		if($isMobile || $isTablet) {
            return view('mobile.test', [
				'tokens' => $all_curr

            ]);
        } else {
            return view('test', [
				'tokens' => $all_curr

            ]);
        }
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



		if ($curr[1] == 'USD' || $curr[1] == 'EUR') {
		// dd($curr[1]);
			// $faloosi = [];
			$test_url = "https://www.foloosi.com/";
			// dd(get_headers($test_url)[0]);

			if (strpos(get_headers($test_url)[0] , "200") !== false) {
				# code...
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
					'usd' => 1
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
					'usd' => 0
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
					'usd' => 1
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
					'usd' => 0
				]);

			}

			}


		} elseif ($curr[1] == 'BTC') {
			return view('buy-token', [
				'bal_amt' => $r['bal'],
				'user_reference_id' => strtotime('now').''.generateRandomString(3), 
				'amt' => $curr[0],
				'curr' => 'BTC'
			]);
		} else {
			return view('buy-token', [
				'bal_amt' => $r['bal'],
				'user_reference_id' => strtotime('now').''.generateRandomString(3),
				'amt' => $curr[0],
				'curr' => 'ETH'
			]);
		}

	}


	public function kyc(Request $request){

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
	            	'bal_amt' => $transaction['bal_amt'],
	            	'number' => $transaction['number']	
	            
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
	            	'bal_amt' => $transaction['bal_amt'],
	            	'number' => $transaction['number']
	            	
	           

				);
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
	            'bal_amt' => $transaction['bal_amt'],
	            'number' => $transaction['number']
	            
			);

		}



			// dd($email_details);

		

	        \Mail::to('info@buyanylight.com')->send(new BuyingConfirmationAdmin($request));


	        \Mail::to($request->get('email_id'))->send(new BuyingConfirmation($request));




		// dd($transaction['email_id']);


		return view('kyc', [
			'amount' => $transaction['amount'],
			'receiver_id' => $transaction['receiver_id'],
			'email_id' => $transaction['email_id'],
			'name' => $transaction['name'],
	        'user_reference_id' => $transaction['user_reference_id'],
	        'bal_amt' => $transaction['bal_amt'],
	        'countries' => $countries,
	        'number' => $transaction['number']

		]);
	}

	public function demo(string $uid) {


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
		]);

	}


	public function kyc_confirm(Request $request){


		// dd($request);

		$validated_attr = request()->validate([
            'user_name' => ['required', 'min:3'],
            'email_id' => ['required', 'min:3'],
            'country' => ['required'],
            'receiver_id' => ['required'],
            'bal_amt' => ['required'],
            'amount' => ['required'],
            'user_id' => ['required'],
            'user_id.*' => ['mimes:jpeg,png,jpg,pdf' , 'max:7168'],
            'user_selfie_id' => ['required'],
            'user_selfie_id.*' => ['mimes:jpeg,png,jpg,pdf', 'max:7168'],
            'user_reference_id' => ['required']
        ]);

		// dd($validated_attr);



        \Mail::to($request->get('email_id'))->send(new KYCConfirmation($request));

        \Mail::to('info@buyanylight.com')->send(new KYCConfirmationAdmin($request));





        $agent = new Agent();

        $isMobile = $agent->isMobile();
        $isTablet = $agent->isTablet();




 		if($isMobile || $isTablet) {
          
        	return view('mobile.thank-you', [
        		'u_details' => $validated_attr
        	]);
        } else {
        	  return view('thank-you', [
        	'u_details' => $validated_attr
        ]);
           
        }






	}



}
