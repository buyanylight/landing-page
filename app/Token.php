<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $fillable = ['name', 'email', 'subject', 'message'];
}
