<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\Kelompok;
use App\Models\Kelurahan;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array("rt_rw" => "RW 11", "nama_kelompok" => "Pasirkunci", "kelurahan_id" => 40+15), 
            array("rt_rw" => "RW 12", "nama_kelompok" => "Gending Mas", "kelurahan_id" => 40+15), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Al Hidayah", "kelurahan_id" => 40+15), 
            array("rt_rw" => "Kantor Kecamatan Ujungberung", "nama_kelompok" => "PKK Kec Ujungberung", "kelurahan_id" => 40+25), 
            array("rt_rw" => "Kantor Kelurahan Cigending", "nama_kelompok" => "PKK Cigending", "kelurahan_id" => 40+25), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "RW 02 Pasir Endah", "kelurahan_id" => 40+35), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Cigiringsing Berkebun", "kelurahan_id" => 40+35), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "RW 08 Pasanggrahan", "kelurahan_id" => 40+45), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Walagri Asri", "kelurahan_id" => 40+45), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "RW 07 Pasir Wangi", "kelurahan_id" => 40+55), 
            array("rt_rw" => "Komplek Bandung Indah Raya", "nama_kelompok" => "AL Biru", "kelurahan_id" => 40+65), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Herbal Garden", "kelurahan_id" => 40+75), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "RW 10 Derwati", "kelurahan_id" => 40+85), 
            array("rt_rw" => "Kompleks De Marakesh", "nama_kelompok" => "Riyadhul Jannah", "kelurahan_id" => 40+85), 
            array("rt_rw" => "RW 13", "nama_kelompok" => "Saluyu Indah", "kelurahan_id" => 40+85), 
            array("rt_rw" => "Komplek Margahayu Raya", "nama_kelompok" => "Barokah", "kelurahan_id" => 40+95), 
            array("rt_rw" => "RW 13", "nama_kelompok" => "Guyub", "kelurahan_id" => 40+105), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Rempug", "kelurahan_id" => 40+135), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Gegersuni", "kelurahan_id" => 40+145), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Teras Sadulur", "kelurahan_id" => 40+145), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Kebun Sauyunan", "kelurahan_id" => 40+165), 
            array("rt_rw" => "Kantor Kecamatan Sukasari", "nama_kelompok" => "PKK Kec Sukasari", "kelurahan_id" => 40+165), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Seka Rasih", "kelurahan_id" => 40+165), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Agrokita", "kelurahan_id" => 40+165), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "Asrama Polisi", "kelurahan_id" => 40+175), 
            array("rt_rw" => "Kantor Kelurahan Sukawarna", "nama_kelompok" => "Rooftop Garden Sukawarna", "kelurahan_id" => 40+195), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "Pemuda Mandiri", "kelurahan_id" => 40+195), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "Screenhouse RW 04", "kelurahan_id" => 40+205), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "Selendang Mayang", "kelurahan_id" => 40+225), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "RW 06 Pelindung Hewan", "kelurahan_id" => 40+225), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "Tani Pemuda", "kelurahan_id" => 40+235), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Binangkit", "kelurahan_id" => 40+245), 
            array("rt_rw" => "-", "nama_kelompok" => "Persistri Nyengseret", "kelurahan_id" => 40+255), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Taman toga", "kelurahan_id" => 40+265), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Kurdi Asri", "kelurahan_id" => 40+275), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "RW 02 Karasak", "kelurahan_id" => 40+275), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "RW 03 Karasak", "kelurahan_id" => 40+275), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Bina Harapan", "kelurahan_id" => 40+275), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Bursa 10", "kelurahan_id" => 40+285), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "RW 04 Arjuna", "kelurahan_id" => 40+295), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "RW 03 Arjuna", "kelurahan_id" => 40+295), 
            array("rt_rw" => "Kantor Kelurahan Pamoyanan", "nama_kelompok" => "Screenhouse", "kelurahan_id" => 40+305), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "RW 08 Pasir Kaliki", "kelurahan_id" => 40+315), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "RW 04 Pajajaran", "kelurahan_id" => 40+325), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "LKK Pajajaran", "kelurahan_id" => 40+325), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "RW 08 Pajajaran", "kelurahan_id" => 40+325), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "RW 03 Pajajaran", "kelurahan_id" => 40+325), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "RW 04 Sukaraja", "kelurahan_id" => 40+335), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "RW 05 Sukaraja", "kelurahan_id" => 40+335), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "RW 07 Sukaraja", "kelurahan_id" => 40+335), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Panama", "kelurahan_id" => 40+345), 
            array("rt_rw" => "-", "nama_kelompok" => "Persistri Bandung Kulon", "kelurahan_id" => 40+375), 
            array("rt_rw" => "-", "nama_kelompok" => "Cigkid", "kelurahan_id" => 40+385), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "BKR RW 01", "kelurahan_id" => 40+415), 
            array("rt_rw" => "RW 19", "nama_kelompok" => "Kebun Bougenvile", "kelurahan_id" => 40+415), 
            array("rt_rw" => "RW 12", "nama_kelompok" => "Mina Mela", "kelurahan_id" => 40+415), 
            array("rt_rw" => "RW 19", "nama_kelompok" => "Jasmine", "kelurahan_id" => 40+425), 
            array("rt_rw" => "Kompleks Sweet Antapani", "nama_kelompok" => "Sweet Antapani Farm", "kelurahan_id" => 40+435), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "GPII", "kelurahan_id" => 40+445), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "PKK RW 08", "kelurahan_id" => 40+455), 
            array("rt_rw" => "Kantor PKK Kota Bandung", "nama_kelompok" => "Bestari PKK", "kelurahan_id" => 40+465), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Buruan Sae Cipicung Ngahejo", "kelurahan_id" => 40+475), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Maleer Berkebun", "kelurahan_id" => 40+485), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "JITU", "kelurahan_id" => 40+505), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Arhanud", "kelurahan_id" => 40+525), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Sabilulungan 01", "kelurahan_id" => 40+535), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "RW 07 Cijagra", "kelurahan_id" => 40+545), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Flamboyan", "kelurahan_id" => 40+555), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Tamansari Sae", "kelurahan_id" => 40+565), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "RW 01", "kelurahan_id" => 40+575), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Tani Sajajar", "kelurahan_id" => 40+585), 
            array("rt_rw" => "Kantor Kecamatan Bandung Kidul", "nama_kelompok" => "PKK Kec Bandung Kidul", "kelurahan_id" => 40+585), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Sauyunan", "kelurahan_id" => 40+585), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Srikandi Jakapurwa", "kelurahan_id" => 40+595), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "Taruna 08", "kelurahan_id" => 40+595), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "Rumasa Berseka", "kelurahan_id" => 40+615), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Pokbun Family", "kelurahan_id" => 40+625), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Campaka", "kelurahan_id" => 40+635), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Pokbun RW 06", "kelurahan_id" => 40+635), 
            array("rt_rw" => "RW 11", "nama_kelompok" => "Juu Agro UB Margasari", "kelurahan_id" => 40+645), 
            array("rt_rw" => "RT 07 RW 13", "nama_kelompok" => "Ratu", "kelurahan_id" => 40+655), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "Pokbun 08", "kelurahan_id" => 40+655), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Pokbun 02", "kelurahan_id" => 40+665), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "Motekar", "kelurahan_id" => 40+675), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Cidurian Utara Berkebun", "kelurahan_id" => 40+685), 
            array("rt_rw" => "RW 11", "nama_kelompok" => "KPAD Pindad Berkebun", "kelurahan_id" => 40+685), 
            array("rt_rw" => "RW 14", "nama_kelompok" => "Raflesia", "kelurahan_id" => 40+685), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Kelompok Usaha Sauyunan Mandiri", "kelurahan_id" => 40+695), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Sedap Malam", "kelurahan_id" => 40+705), 
            array("rt_rw" => "RT 02/RW 01", "nama_kelompok" => "Goropas", "kelurahan_id" => 40+715), 
            array("rt_rw" => "-", "nama_kelompok" => "Tim PKK Cimincrang", "kelurahan_id" => 40+725), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Sabilulungan", "kelurahan_id" => 40+725), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sembara", "kelurahan_id" => 40+735), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Rancabayawak (POKMAS)", "kelurahan_id" => 40+735), 
            array("rt_rw" => "RW 14", "nama_kelompok" => "Flamboyan", "kelurahan_id" => 40+735), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "04 Pacing", "kelurahan_id" => 40+735), 
            array("rt_rw" => "Rw 11", "nama_kelompok" => "Alamanda", "kelurahan_id" => 40+735), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Sapuluh", "kelurahan_id" => 40+735), 
            array("rt_rw" => "-", "nama_kelompok" => "TPS Rancabolang", "kelurahan_id" => 40+745), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Takakura", "kelurahan_id" => 40+765), 
            array("rt_rw" => "RW 13", "nama_kelompok" => "Pesona 13", "kelurahan_id" => 40+765), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Mom's Hortikulur", "kelurahan_id" => 40+765), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Bima Mandiri", "kelurahan_id" => 40+775), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Go Green 06", "kelurahan_id" => 40+785), 
            array("rt_rw" => "RW 13", "nama_kelompok" => "Caringin Sejahtera", "kelurahan_id" => 40+805), 
            array("rt_rw" => "RT 07 RW 05", "nama_kelompok" => "Cirangrang Ngahiji", "kelurahan_id" => 40+825), 
            array("rt_rw" => "RT 01", "nama_kelompok" => "01 MU", "kelurahan_id" => 40+835), 
            array("rt_rw" => "-", "nama_kelompok" => "Kerabat Kopo", "kelurahan_id" => 40+835), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sabilulungan MS", "kelurahan_id" => 40+845), 
            array("rt_rw" => "RW 10", "nama_kelompok" => "Taman ferari", "kelurahan_id" => 40+855), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Hegar", "kelurahan_id" => 40+865), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sukarasa", "kelurahan_id" => 40+875), 
            array("rt_rw" => "RT 04 RW  04", "nama_kelompok" => "Bumantara Subur", "kelurahan_id" => 40+885), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Persistri Jatihandap", "kelurahan_id" => 40+895), 
            array("rt_rw" => "RW 01", "nama_kelompok" => "Flamboyan", "kelurahan_id" => 40+905), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "RW 06 Sindang Jaya", "kelurahan_id" => 40+915), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "Neglasari Asri", "kelurahan_id" => 40+945), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "RW 02 Sukaluyu", "kelurahan_id" => 40+955), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sapu Jagat", "kelurahan_id" => 40+955), 
            array("rt_rw" => "RW 11", "nama_kelompok" => "Kampung Cibarani", "kelurahan_id" => 40+965), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sabilulungan", "kelurahan_id" => 40+965), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sauyunan", "kelurahan_id" => 40+975), 
            array("rt_rw" => "RW 12", "nama_kelompok" => "Taman Bejo", "kelurahan_id" => 40+995), 
            array("rt_rw" => "RW 14", "nama_kelompok" => "Bupara Indah", "kelurahan_id" => 40+995), 
            array("rt_rw" => "RW 04", "nama_kelompok" => "Insan Cermat", "kelurahan_id" => 40+995), 
            array("rt_rw" => "RW 13", "nama_kelompok" => "Sabedug", "kelurahan_id" => 40+995), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "Sakedap", "kelurahan_id" => 40+995), 
            array("rt_rw" => "RW 12", "nama_kelompok" => "Pokbun RW 12", "kelurahan_id" => 40+1015), 
            array("rt_rw" => "RW 11", "nama_kelompok" => "Edu Tani Mandiri", "kelurahan_id" => 40+1025), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Tani Suka", "kelurahan_id" => 40+1035), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Mekarwangi", "kelurahan_id" => 40+1045), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Mandiri Cipwet", "kelurahan_id" => 40+1055), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Anggrek", "kelurahan_id" => 40+1055), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Sariwangi", "kelurahan_id" => 40+1055), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Cipadung Wetan Hijau", "kelurahan_id" => 40+1055), 
            array("rt_rw" => "-", "nama_kelompok" => "Mulya Barokah", "kelurahan_id" => 40+1065), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Ceria", "kelurahan_id" => 40+1075), 
            array("rt_rw" => "RW 08", "nama_kelompok" => "Agri Kota 08", "kelurahan_id" => 40+1085), 
            array("rt_rw" => "RW 19", "nama_kelompok" => "Sadang Serang Berkebun", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 09", "nama_kelompok" => "Sauyunan 09", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "Rw 20", "nama_kelompok" => "Mandiri", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 11", "nama_kelompok" => "Hejo", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 02", "nama_kelompok" => "Wahaji", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Hejo", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 07", "nama_kelompok" => "Sabilulungan", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 15", "nama_kelompok" => "Belpas", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 21", "nama_kelompok" => "Flamboyan", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 14", "nama_kelompok" => "Tani Hejo", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "RW 03", "nama_kelompok" => "Sadang Serang Berkebun RW 03", "kelurahan_id" => 40+1095), 
            array("rt_rw" => "Dago pojok", "nama_kelompok" => "Padaringan", "kelurahan_id" => 40+1105), 
            array("rt_rw" => "RW 05", "nama_kelompok" => "Tanggulan Hejo Asli", "kelurahan_id" => 40+1105), 
            array("rt_rw" => "RW 06", "nama_kelompok" => "Berasa Damai", "kelurahan_id" => 40+1115)
        );

        foreach($datas as $data){
            $Kelompok = new Kelompok();
            $Kelompok->nama_kelompok = $data['nama_kelompok'];
            $Kelompok->rt_rw = $data['rt_rw'];
            $Kelompok->kelurahan_id = $data['kelurahan_id'];
            $Kelompok->save();
        }
    }
}
