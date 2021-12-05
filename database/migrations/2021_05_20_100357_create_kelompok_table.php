<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kelompok', function (Blueprint $table) {
            $table->increments('kelompok_id');
            $table->string('nama_kelompok', 255);
            $table->string('rt_rw', 50);
            $table->integer('kelurahan_id')->unsigned();
            
            $table->foreign('kelurahan_id')->references('kelurahan_id')->on('tb_kelurahan');
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
        Schema::dropIfExists('tb_kelompok');
    }
}
