<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Kecamatan;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('nama_kecamatan' => 'Ujungberung'), 
            array('nama_kecamatan' => 'Rancasari'), 
            array('nama_kecamatan' => 'Cinambo'), 
            array('nama_kecamatan' => 'Sukasari'), 
            array('nama_kecamatan' => 'Sukajadi'), 
            array('nama_kecamatan' => 'Astana anyar'), 
            array('nama_kecamatan' => 'Astana anyar'), 
            array('nama_kecamatan' => 'Cicendo'), 
            array('nama_kecamatan' => 'Bandung Kulon'), 
            array('nama_kecamatan' => 'Antapani'), 
            array('nama_kecamatan' => 'Batununggal'), 
            array('nama_kecamatan' => 'Sumur Bandung'), 
            array('nama_kecamatan' => 'Lengkong'), 
            array('nama_kecamatan' => 'Bandung Wetan'), 
            array('nama_kecamatan' => 'Bandung Kidul'), 
            array('nama_kecamatan' => 'Andir'), 
            array('nama_kecamatan' => 'Buah Batu'), 
            array('nama_kecamatan' => 'Kiaracondong'), 
            array('nama_kecamatan' => 'Regol'), 
            array('nama_kecamatan' => 'Bojongloa Kaler'), 
            array('nama_kecamatan' => 'Gedebage'), 
            array('nama_kecamatan' => 'Arcamanik'), 
            array('nama_kecamatan' => 'Babakan Ciparay'), 
            array('nama_kecamatan' => 'Cibeunying Kidul'), 
            array('nama_kecamatan' => 'Mandalajati'), 
            array('nama_kecamatan' => 'Mandalajati'), 
            array('nama_kecamatan' => 'Cibeunying Kaler'), 
            array('nama_kecamatan' => 'Cidadap'), 
            array('nama_kecamatan' => 'Cibiru'), 
            array('nama_kecamatan' => 'Bojongloa Kidul'), 
            array('nama_kecamatan' => 'Panyileukan'), 
            array('nama_kecamatan' => 'Coblong')
        );

        for($i = 0; $i < count($data); $i++){
            $kecamatan = new Kecamatan();
            $kecamatan->nama_kecamatan = $data[$i]['nama_kecamatan'];
            $kecamatan->save();
        }
    }
}
