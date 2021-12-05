<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditFileTable extends Migration{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_audit_file', function (Blueprint $table) {
            $table->increments('audit_file_id');
            $table->integer('audit_id')->unsigned();
            $table->text('file_name')->nullable();

            $table->foreign('audit_id')->references('audit_id')->on('tb_audit');
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
        Schema::dropIfExists('tb_audit_file');
    }
}