<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTokens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('token_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_reference_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email_id')->nullable();
            $table->string('number')->nullable();
            $table->string('country')->nullable();
            $table->string('bal_amt')->nullable();
            $table->string('amount')->nullable();
            $table->string('reference')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('later_bank')->nullable();
            $table->string('user_id_pic')->nullable();
            $table->string('selfie_id_pic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_users');
    }
}
