<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssetDetails extends Migration
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
            $table->decimal('asset_estimate', 15, 2);
            $table->string('asset_name');
            $table->string('asset_location');
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
