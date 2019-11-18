<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenBuyer extends Model
{
    public $table = 'token_users';

    public $fillable = ['user_reference_id', 'name','email_id', 'number', 'country', 'bal_amt', 'amount', 'reference', 'receiver_id', 'transaction_id', 'later_bank', 'user_id_pic', 'selfie_id_pic'];
}
