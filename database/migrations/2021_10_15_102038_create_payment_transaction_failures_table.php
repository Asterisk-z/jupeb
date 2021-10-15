<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTransactionFailuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_transaction_failures', function (Blueprint $table) {
            $table->id();
            $table->string('ProductGroupCode');
            $table->string('PaymentLogId');
            $table->string('CustReference');
            $table->string('AlternateCustReference');
            $table->float('Amount');
            $table->string('PaymentStatus');
            $table->string('PaymentMethod');
            $table->string('PaymentReference');
            $table->string('TerminalId');
            $table->string('ChannelName');
            $table->string('Location');
            $table->string('IsReversal');
            $table->string('PaymentDate');
            $table->string('SettlementDate');
            $table->string('InstitutionId');
            $table->string('InstitutionName');
            $table->string('BranchName');
            $table->string('BankName');
            $table->string('FeeName');
            $table->string('CustomerName');
            $table->string('ReceiptNo');
            $table->string('CollectionsAccount');
            $table->string('ThirdPartyCode');
            $table->string('BankCode');
            $table->string('CustomerAddress');
            $table->string('CustomerPhoneNumber');
            $table->string('DepositorName');
            $table->string('DepositSlipNumber');
            $table->string('PaymentCurrency');
            $table->string('REASON');
            $table->string('TREATED');
            $table->string('SYNCED_TO_NET');
            $table->string('SYNCED_TO_LOCAL');
            $table->string('OriginalPaymentLogId');
            $table->string('OriginalPaymentReference');
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
        Schema::dropIfExists('payment_transaction_failures');
    }
}
