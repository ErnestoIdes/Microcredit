<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');  

            $table->string('number');  
            $table->timestamp('issued_at');
            $table->timestamp('expire_at');

            $table->string('user_id')->nullable(false);
            $table->integer('document_type_id');           
            $table->timestamps();  
        });

        Schema::create('document_type', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
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
        Schema::dropIfExists('documents');
        Schema::dropIfExists('document_type');
    }
}
