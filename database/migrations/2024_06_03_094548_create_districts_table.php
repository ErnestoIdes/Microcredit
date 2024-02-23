<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();

            //foreign key
            $table->bigInteger('country_id')->unsigned();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            $table->bigInteger('province_id')->unsigned();
            // $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

            $table->string('name')->length('25');
            $table->char('code')->length('5')->nullable();
            $table->boolean('is_active')->default('0')->nullable();
            $table->boolean('deleted')->default(0);

            $table->timestamps();

            //table configurations
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
