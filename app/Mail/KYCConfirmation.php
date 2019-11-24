<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KYCConfirmation extends Mailable
{
    use Queueable, SerializesModels;

        protected $request;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        // dd($request);
        $this->kyc_details = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        //  function generateRandomString($length) {
        //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //     $charactersLength = strlen($characters);
        //     $randomString = '';
        //     for ($i = 0; $i < $length; $i++) {
        //         $randomString .= $characters[rand(0, $charactersLength - 1)];
        //     }
        //     return $randomString;
        // }


        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://192.168.1.200:8000/v1/validate-email',
            CURLOPT_USERAGENT => 'cURL Request',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => [
                'email' => $this->kyc_details->email_id,
            ]
       ]);

        $resp = curl_exec($curl);

        curl_close($curl);

        if ($resp == 0) {
            $account = "We have created a BuyAnyLight account for you to check your BAL Tokens </p><p> Here are the account details: </p><p><strong>Email: </strong>".$this->kyc_details->email_id."<br><strong>Password: </strong>".$this->kyc_details->password."</p>";
        } else {
            $account = "Please use your BuyAnyLight account to check your BAL Tokens";
        }


        return $this->markdown('emails.kycconfirmation')
            ->subject('KYC Form Completed - Your BAL Token Investment')

                    ->with([
                        'name' => $this->kyc_details->user_name,
                        'email' => $this->kyc_details->email_id,
                        'receiver_id' => $this->kyc_details->receiver_id,
                        'amount' => $this->kyc_details->amount,
                        'user_reference_id' => $this->kyc_details->user_reference_id,
                        'bal_amt' => $this->kyc_details->bal_amt,
                        'reference' => $this->kyc_details->reference,
                        'country' => $this->kyc_details->country,
                        'number' => $this->kyc_details->number,
                        'later_bank' => $this->kyc_details->later_bank,
                        'account' => $account
                     ]);

    }
}
