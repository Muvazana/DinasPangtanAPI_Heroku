<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeUpdateTable;

class TimeUpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array("table_name" => "tb_kecamatan"), 
            array("table_name" => "tb_kelurahan"), 
            array("table_name" => "tb_kelompok"), 
            array("table_name" => "tb_komoditas")
        );

        foreach($datas as $data){
            $TimeUpdateTable = new TimeUpdateTable();
            $TimeUpdateTable->table_name = $data['table_name'];
            $TimeUpdateTable->save();
        }
    }
}
