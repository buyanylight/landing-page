<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BuyingConfirmationAdmin extends Mailable
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
        return $this->markdown('emails.buyingconfirmationadmin')
                    ->subject('New BAL Token Purchase')
                    ->with([
                        'name' => $this->buyer_details->name,
                        'email' => $this->buyer_details->email_id,
                        'receiver_id' => $this->buyer_details->receiver_id,
                        'amount' => $this->buyer_details->amount,
                        'user_reference_id' => $this->buyer_details->user_reference_id,
                        'bal_amt' => $this->buyer_details->bal_amt,
                        'reference' => $this->buyer_details->reference,
                        'number' => $this->buyer_details->number,
                        'later_bank' => $this->buyer_details->later_bank,
                        'transaction_id' => $this->buyer_details->transaction_id

                     ]);
    }
}
