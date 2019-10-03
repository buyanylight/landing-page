<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KYCConfirmationAdmin extends Mailable
{
    use Queueable, SerializesModels;

        protected $request;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->kyc_details = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

         if (request()->hasFile('user_selfie_id')) {
            $name = explode(' ', $this->kyc_details->user_name);
            $file_name = date('YmdHis') . '-' .$name[0].'-'.request()->file('user_selfie_id')->getClientOriginalName() ;
            request()->file('user_selfie_id')->move(public_path() . '/uploads/', $file_name);  
        }

        if (request()->hasFile('user_id')) {
            $name = explode(' ', $this->kyc_details->user_name);
            $selfie_file_name = date('YmdHis') . '-' .$name[0].'-'. request()->file('user_id')->getClientOriginalName();
            request()->file('user_id')->move(public_path() . '/uploads/', $file_name);  
        }


        return $this->markdown('emails.kycconfirmationadmin')
                    ->with([
                        'name' => $this->kyc_details->user_name,
                        'email' => $this->kyc_details->email_id,
                        'receiver_id' => $this->kyc_details->receiver_id,
                        'amount' => $this->kyc_details->amount,
                        'user_reference_id' => $this->kyc_details->user_reference_id,
                        'bal_amt' => $this->kyc_details->bal_amt,
                        'reference' => $this->kyc_details->reference,
                        'country' => $this->kyc_details->country,
                        'user_id' => url('uploads/'. $file_name),
                        'selfie_user_id' => url('uploads/'. $selfie_file_name),
                     ]);

    }
}
