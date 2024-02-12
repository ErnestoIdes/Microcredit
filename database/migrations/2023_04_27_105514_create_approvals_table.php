<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('answer1');
            $table->string('answer2');
            $table->string('answer3');
            $table->string('answer4');
            $table->string('answer5');
            $table->string('answer6');
            $table->string('answer7');
            $table->string('answer8');
            $table->string('answer9');
            $table->string('answer10');
            $table->string('answer11');
            $table->integer('loan_officer_decision');
            $table->integer('cfo_decision');
            $table->string('loan_officer_comments');
            $table->string('cfo_comments');
            $table->string('user_id');
            $table->string('loan_number');
           
           
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
        Schema::dropIfExists('approvals');
    }
}
