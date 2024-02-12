<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gross extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reg_employee_mst', function (Blueprint $table) {
            //
            $table->decimal('gross', 15, 2);
            $table->decimal('basic', 15, 2);
            $table->string('supervisors_name');
            $table->string('supervisors_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reg_employee_mst', function (Blueprint $table) {
            //
        });
    }
}
