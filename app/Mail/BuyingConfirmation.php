<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class BuyingConfirmation extends Mailable
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
        $this->buyer_details = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.buyingconfirmation')
                    ->subject('Your BAL Token Investment')

                     ->attach(public_path() . '/BAL_Token_Sale_Agreement.pdf')
                     ->with([
                        'name' => $this->buyer_details->name,
                        'email' => $this->buyer_details->email_id,
                        'receiver_id' => $this->buyer_details->receiver_id,
                        'amount' => $this->buyer_details->amount,
                        'user_reference_id' => $this->buyer_details->user_reference_id,
                        'bal_amt' => $this->buyer_details->bal_amt,
                        'reference' => $this->buyer_details->reference,
                     ]);
    }
}
