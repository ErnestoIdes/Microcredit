<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegEmployeeAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_employee_attachments', function (Blueprint $table) {
            $table->id('employee_attachment_id');
            $table->integer('employee_id')->unsigned();
            $table->string('document_type_id');
            $table->string('attachment_name');
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
        Schema::dropIfExists('reg_employee_attachments');
    }
}
