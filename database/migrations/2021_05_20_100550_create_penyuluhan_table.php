<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyuluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penyuluhan', function (Blueprint $table) {
            $table->increments('penyuluhan_id');
            $table->integer('user_id')->unsigned();
            $table->integer('kelurahan_id')->unsigned();
            $table->date('date');
            $table->integer('kelompok_id')->unsigned();
            $table->integer('jumlah_anggota')->unsigned()->default(0);
            $table->string('kegiatan', 255)->nullable();
            $table->string('teknis', 255)->nullable();
            $table->string('sosial', 255)->nullable();
            $table->string('ekonomi', 255)->nullable();
            $table->text('masalah')->nullable();
            $table->text('pemecahan_masalah')->nullable();

            $table->foreign('user_id')->references('user_id')->on('tb_users');
            $table->foreign('kelurahan_id')->references('kelurahan_id')->on('tb_kelurahan');
            $table->foreign('kelompok_id')->references('kelompok_id')->on('tb_kelompok');
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
        Schema::dropIfExists('tb_penyuluhan');
    }
}
