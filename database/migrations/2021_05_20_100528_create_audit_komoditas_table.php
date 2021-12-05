<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditKomoditasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_audit_komoditas', function (Blueprint $table) {
            $table->increments('audit_komoditas_id');
            $table->integer('audit_id')->unsigned();
            $table->integer('komoditas_id')->unsigned();
            
            $table->foreign('audit_id')->references('audit_id')->on('tb_audit');
            $table->foreign('komoditas_id')->references('komoditas_id')->on('tb_komoditas');
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
        Schema::dropIfExists('tb_audit_komoditas');
    }
}
