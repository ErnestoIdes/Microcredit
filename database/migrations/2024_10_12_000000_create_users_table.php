<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code')->unique();
            $table->string('firstname');
            $table->string('lastname');        
            $table->string('gender');
            $table->string('marital_status');           
            $table->string('province_id');
            $table->string('district_id');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone')->unique();

            $table->string('position')->nullable();
            $table->string('net_salary')->nullable();
            $table->string('payment_method')->nullable();

            // $table->string('credit_limit');//client           
            $table->string('bank_id')->nullable();
            $table->string('bank_account_no')->nullable();  

            $table->string('mobile_wallet_id')->nullable();    
         
            $table->enum('type', ['Client', 'Employee','Admin']);
          
            $table->string('microcredit_id');
            $table->string('created_by_id');
            $table->string('password');

            $table->boolean('is_blacklisted')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
