<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Amount extends Migration
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
            $table->decimal('amount', 15, 2);
            $table->decimal('emi', 15, 2);
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
