<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('loan_code');
            $table->enum('state', ['Rejected', 'Approved','Under Review'])->default('Under Review');     
            $table->enum('type', ['Loan', 'Simulation']);     
            $table->string('decided_by');     
            $table->timestamp('decided_at');     
            $table->string('client_code');     
            $table->string('rate');
            $table->string('amount');            
            $table->string('amount_paid');
            $table->string('amount_to_pay');
            $table->string('due_date');
            $table->boolean('paid')->default(false);
            $table->string('created_by_id');
            $table->timestamps();
        });

        Schema::create('parcels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('loan_id');
            $table->boolean('paid')->default(false); 
            $table->string('amount_to_pay');
            $table->string('amount_paid');
            $table->string('due_date');
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('parcel_id');
            $table->string('amount');
            $table->string('payment_method');
            $table->timestamps();
        });

         Schema::create('payment_method', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
       Schema::dropIfExists('loans');
       Schema::dropIfExists('parcels');
       Schema::dropIfExists('payments');
       Schema::dropIfExists('payment_method');
    }
}
