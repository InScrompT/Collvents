<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('total_price');
            $table->unsignedBigInteger('service_charge');
            $table->unsignedBigInteger('gst_charge');
            $table->unsignedBigInteger('gateway_charge');

            $table->string('razorpay_order_id');
            $table->string('razorpay_payment_id');
            $table->string('razorpay_signature');

            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
