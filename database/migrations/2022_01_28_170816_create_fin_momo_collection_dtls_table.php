<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinMomoCollectionDtlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fin_momo_collection_dtls', function (Blueprint $table) {
            $table->id('request_id');
            $table->string('mobile_no');
            $table->string('loan_ref_no');
            $table->string('amount');
            $table->string('currency');
            $table->string('external_ref_no');
            $table->string('external_system');
            $table->string('comments');
            $table->string('status');
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
        Schema::dropIfExists('fin_momo_collection_dtls');
    }
}
