<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('serviceUrl');
            $table->string('productGroupCode');
            $table->integer('paymentLogId');
            $table->string('custReference')->unique();
            $table->float('amount');
            $table->integer('paymentStatus');
            $table->string('paymentMethod');
            $table->string('paymentReference');
            $table->string('channelName');
            $table->string('isReversal');
            $table->string('paymentDate');
            $table->string('settlementDate');
            $table->string('institutionId');
            $table->string('institutionName');
            $table->string('customerName');
            $table->integer('receiptNo');
            $table->string('itemName');
            $table->string('itemCode');
            $table->float('itemAmount');
            $table->integer('paymentCurrency');
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
        Schema::dropIfExists('payment_notifications');
    }
}
