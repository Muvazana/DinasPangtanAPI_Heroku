<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_audit', function (Blueprint $table) {
            $table->increments('audit_id');
            $table->integer('user_id')->unsigned();
            $table->integer('kelurahan_id')->unsigned();
            $table->date('date');
            $table->integer('kelompok_id')->unsigned();
            $table->date('date_tanam')->nullable();
            $table->string('luas_vol_tanam', 150)->nullable();
            $table->date('date_panen')->nullable();
            $table->string('luas_vol_panen', 150)->nullable();
            $table->string('provitas_panen', 150)->nullable();
            $table->string('produksi_panen', 150)->nullable();
            $table->date('date_pengolahan')->nullable();
            $table->string('vol_pengolahan', 150)->nullable();
            $table->string('total_nilai_harga', 150)->nullable();
            $table->text('keterangan')->nullable();

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
        Schema::dropIfExists('tb_audit');
    }
}
