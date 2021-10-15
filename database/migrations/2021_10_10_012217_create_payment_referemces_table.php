<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentReferemcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_referemces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->string('registration_invoice');
            $table->string('registration_status');;
            $table->string('registration_amount');
            $table->string('acceptance_invoice');
            $table->string('acceptance_status');;
            $table->string('acceptance_amount');
            $table->string('schoolFee_invoice');
            $table->string('schoolFee_status');;
            $table->string('schoolFee_amount');
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
        Schema::dropIfExists('payment_referemces');
    }
}
