<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeUpdateTable extends Migration{
    
    public function up(){
        Schema::create('tb_time_update_table', function (Blueprint $table) {
            $table->increments('time_update_table_id');
            $table->string('table_name', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('create_time_update_table');
    }
}