<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyuluhanFileTable extends Migration{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penyuluhan_file', function (Blueprint $table) {
            $table->increments('penyuluhan_file_id');
            $table->integer('penyuluhan_id')->unsigned();
            $table->text('file_name')->nullable();

            $table->foreign('penyuluhan_id')->references('penyuluhan_id')->on('tb_penyuluhan');
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
        Schema::dropIfExists('tb_penyuluhan_file');
    }
}