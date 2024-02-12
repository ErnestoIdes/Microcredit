<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiLoginsMstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_logins_mst', function (Blueprint $table) {
            $table->id('no');
            $table->integer('employee_id')->unsigned();
            $table->string('password');
            $table->string('nrc');
            $table->string('activation_date');
            $table->string('activation_code');
            $table->string('account_status');
            $table->string('forgot_password_code');
            $table->string('forgot_password_date');
            $table->string('last_login_dt');
            $table->string('enrolled_by');
            $table->string('updated_dt');
            $table->string('blocked_dt');
            $table->timestamp('created_dt');           
            $table->foreign('employee_id')->references('employee_id')->on('reg_employee_mst')
        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_logins_mst');
    }
}
