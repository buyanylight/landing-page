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
                        'country' => $this->kyc_details->country
                     ]);

    }
}
