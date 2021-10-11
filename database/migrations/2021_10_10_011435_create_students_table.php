<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
            $table->string('jupebID')->unique()->nullable();
            $table->string('programme');
            $table->string('course');
            $table->string('session')->default('2020/2021');
            $table->enum('registerationStatus', ['0','1'])->default(0);
            // $table->string('paymentMethod')->default('Bank');
            // $table->enum('paymentStatus', ['0','1'])->default(0);
            // $table->enum('registerationFeeStatus', ['0','1'])->default(0);
            $table->enum('admissionStatus', ['0','1'])->default(0);
            $table->enum('maritalStatus', ['single','married','divorced'])->nullable();
            $table->enum('gender', ['male','female'])->nullable();
            $table->string('passport')->nullable();
            $table->string('dob')->nullable();
            $table->string('wace')->nullable();
            $table->string('jamb')->nullable();
            $table->string('otherResult')->nullable();
            $table->string('contactAddress')->nullable();
            $table->string('state')->nullable();
            $table->string('nationality')->nullable();
            $table->string('lga')->nullable();
            $table->string('nextOfKinFullName')->nullable();
            $table->string('nextOfKinRelationship')->nullable();
            $table->string('nextOfKinAddress')->nullable();
            $table->string('nextOfKinPhoneNumber')->nullable();
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
        Schema::dropIfExists('students');
    }
}
