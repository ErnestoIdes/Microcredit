<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::create('credit_rate', function (Blueprint $table) {
            $table->id('id');
            $table->integer('quant_month'); 
            $table->float('rate'); 
            // $table->string('microcredit_id')->unsigned(); 
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
        Schema::dropIfExists('credit_rate');
    }
}
