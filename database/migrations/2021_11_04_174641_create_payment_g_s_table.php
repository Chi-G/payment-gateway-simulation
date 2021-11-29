<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('card_name');
            $table->string('amount');
            $table->string('email');
            $table->string('card_number');
            $table->string('cvv');
            $table->string('pin');
            $table->string('expiration_year')->nullable();
            $table->string('expiration_month')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('payment_g_s');
    }
}
