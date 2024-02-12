<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_loan_applications', function (Blueprint $table) {
            //
            $table->string('payslip1');
            $table->string('payslip2');
            $table->string('bank_statement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_loan_applications', function (Blueprint $table) {
            //
        });
    }
}
