<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutoLoansAttachments extends Migration
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
            $table->string('whitebook');
            $table->string('front_image');
            $table->string('back_image');
            $table->string('left_image');
            $table->string('right_image');
            $table->string('chassis_number');
            $table->string('mileage');
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
