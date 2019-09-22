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


		$transaction = $this->validate($request, [
            'transaction_id' => '',
            'receiver_id' => 'required',
            'amount' => 'required',
            'email_id' => 'required', 
        ]);


		// dd($transaction['email_id']);

        \Mail::send('mail.token',
        array(
        	'amount' => $transaction['amount'],
            'transaction_id' => $transaction['transaction_id'],
            'receiver_id' => $transaction['receiver_id'],
            'email_id' => $transaction['email_id'],
       	), function($message) use ($request){
            $message->from('no-reply@buyanylight.com');
           	$message->to('rizvi.almanilighting@gmail.com', 'Admin')->subject('New BAL Token Transaction');
        });


        \Mail::send('mail.token-user',
        array(
        	'amount' => $transaction['amount'],
            'transaction_id' => $transaction['transaction_id'],
            'receiver_id' => $transaction['receiver_id'],
            'email_id' => $transaction['email_id'],
       	), function($message) use ($request){
            $message->from('no-reply@buyanylight.com');
           	$message->to($request->get('email_id'), 'Investor')->subject('Your BAL Token Transaction');
        });


		return view('kyc', [
			'countries' => $countries,
			'email_id' => $transaction['email_id']
		])->with('success');
	}

	public function demo() {

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
			'countries' => $countries
		]);

	}


	public function kyc_confirm(Request $request){




		$validated_attr = request()->validate([
            'user_name' => ['required', 'min:3'],
            'email_id' => ['required', 'min:3'],
            'country' => ['required'],
            'user_id' => ['required'],
            'user_id.*' => ['mimes:jpeg,png,jpg,gif' , 'required'],
            'user_selfie_id' => ['required'],
            'user_selfie_id.*' => ['mimes:jpeg,png,jpg,gif', 'required'],
        ]);

		// dd($validated_attr);

		if (request()->hasFile('user_selfie_id')) {
			$name = explode(' ', $validated_attr['user_name']);


        	$file_name = date('YmdHis') . '-' .$name[0].'-'.request()->file('user_selfie_id')->getClientOriginalName() ;
         request()->file('user_selfie_id')->move(public_path() . '/uploads/', $file_name);  
        }

		if (request()->hasFile('user_id')) {
			$name = explode(' ', $validated_attr['user_name']);
        	$selfie_file_name = date('YmdHis') . '-' .$name[0].'-'. request()->file('user_id')->getClientOriginalName();
        	 request()->file('user_id')->move(public_path() . '/uploads/', $file_name);  
        }

         \Mail::send('mail.kyc-confirm',
        array(
        	'name' => $validated_attr['user_name'],
            'email_id' => $validated_attr['email_id'],
            'country' => $validated_attr['country'],
            'user_id' => url('uploads/'. $file_name),
            'selfie_user_id' => url('uploads/'. $selfie_file_name),
       	), function($message) use ($request){
            $message->from('no-reply@buyanylight.com');
           	$message->to('rizvi.almanilighting@gmail.com', 'Admin')->subject('New KYC verification');
        });




        return view('ieo');




	}



}
