<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Komoditas;

class KomoditasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array("type" => "MEDIA TANAM", "nama_komoditas" => "Tanah Lembang"), 
            array("type" => "MEDIA TANAM", "nama_komoditas" => "Sekam Bakar"), 
            array("type" => "MEDIA TANAM", "nama_komoditas" => "Pupuk Kandang"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Pakcoy"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Caisim"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Kangkung"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Bayam Hijau"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Terong Ungu"), 
            array("type" => "BENIH SAYURAN", "nama_komoditas" => "Benih Cabe Rawit Domba"), 
            array("type" => "NPK", "nama_komoditas" => "-"), 
            array("type" => "OTG", "nama_komoditas" => "-"), 
            array("type" => "POLIBAG", "nama_komoditas" => "-"), 
            array("type" => "TANAMAN PRODUKTIF", "nama_komoditas" => "Jeruk purut"), 
            array("type" => "TANAMAN PRODUKTIF", "nama_komoditas" => "Jeruk Nipis"), 
            array("type" => "TANAMAN PRODUKTIF", "nama_komoditas" => "Jambu Kristal"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Tanaman Terong Ungu"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Tanaman Cabe Rawit"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Bibit Pakcoy"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Bibit Caisim"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Bibit Romane"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Bibit Tomat"), 
            array("type" => "BIBIT SAYURAN", "nama_komoditas" => "Bibit Brokoli"), 
            array("type" => "TERNAK AYAM", "nama_komoditas" => "Kandang ayam"), 
            array("type" => "TERNAK AYAM", "nama_komoditas" => "Ayam"), 
            array("type" => "TERNAK AYAM", "nama_komoditas" => "Pakan ayam layer"), 
            array("type" => "BUDIKDAMBER", "nama_komoditas" => "Benih lele"), 
            array("type" => "BUDIKDAMBER", "nama_komoditas" => "Kangkung"), 
            array("type" => "BUDIKDAMBER", "nama_komoditas" => "pelet apung"), 
            array("type" => "BUDIKDAMBER", "nama_komoditas" => "Pot plastik"), 
            array("type" => "BUDIKDAMBER", "nama_komoditas" => "Ember Besar")
        );

        foreach($datas as $data){
            $komoditas = new Komoditas();
            $komoditas->type = $data['type'];
            $komoditas->nama_komoditas = $data['nama_komoditas'];
            $komoditas->save();
        }
    }
}
