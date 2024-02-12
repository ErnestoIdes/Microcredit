<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebLoanApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('loan_type');
            $table->string('employee_id');
            $table->string('company_id');
            $table->string('months');
            $table->string('loan_amount');
            $table->string('payment_mode');
            $table->string('mobile_money_number');
            $table->string('mobile_monney_name');
            $table->string('loan_number');
            $table->integer('approved');
            $table->string('due_date');
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
        Schema::dropIfExists('web_loan_applications');
    }
}
