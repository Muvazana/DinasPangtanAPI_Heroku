<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Kecamatan;
use App\Models\Kelurahan;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('nama_kelurahan' => 'Pasir Jati', 'kecamatan_id' => 5), 
            array('nama_kelurahan' => 'Cigending', 'kecamatan_id' => 5), 
            array('nama_kelurahan' => 'Pasir Endah', 'kecamatan_id' => 5), 
            array('nama_kelurahan' => 'Pasanggrahan', 'kecamatan_id' => 5), 
            array('nama_kelurahan' => 'Pasir Wangi', 'kecamatan_id' => 5), 
            array('nama_kelurahan' => 'Mekarjaya', 'kecamatan_id' => 15), 
            array('nama_kelurahan' => 'Cipamokolan', 'kecamatan_id' => 15), 
            array('nama_kelurahan' => 'Derwati', 'kecamatan_id' => 15), 
            array('nama_kelurahan' => 'Manjahlega', 'kecamatan_id' => 15), 
            array('nama_kelurahan' => 'Pakemitan', 'kecamatan_id' => 25), 
            array('nama_kelurahan' => 'Cisaranten Wetan', 'kecamatan_id' => 25), 
            array('nama_kelurahan' => 'Sukamulya', 'kecamatan_id' => 25), 
            array('nama_kelurahan' => 'Babakan Penghulu', 'kecamatan_id' => 25), 
            array('nama_kelurahan' => 'Gegerkalong', 'kecamatan_id' => 35), 
            array('nama_kelurahan' => 'Isola', 'kecamatan_id' => 35), 
            array('nama_kelurahan' => 'Sarijadi', 'kecamatan_id' => 35), 
            array('nama_kelurahan' => 'Cipedes', 'kecamatan_id' => 45), 
            array('nama_kelurahan' => 'Pasteur', 'kecamatan_id' => 45), 
            array('nama_kelurahan' => 'Sukawarna', 'kecamatan_id' => 45), 
            array('nama_kelurahan' => 'Sukabungah', 'kecamatan_id' => 45), 
            array('nama_kelurahan' => 'Sukagalih', 'kecamatan_id' => 45), 
            array('nama_kelurahan' => 'Pelindung Hewan', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Cibadak', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Panjunan', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Nyengseret', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Karanganyar', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Karasak', 'kecamatan_id' => 55), 
            array('nama_kelurahan' => 'Husen Sastranegara', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Arjuna', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Pamoyanan', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Pasirkaliki', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Pajajaran', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Sukaraja', 'kecamatan_id' => 65), 
            array('nama_kelurahan' => 'Cijerah', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Caringin', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Cibuntu', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Cigondewah Kaler', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Cigondewah Kidul', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Cigondewah Rahayu', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Gempolsari', 'kecamatan_id' => 75), 
            array('nama_kelurahan' => 'Antapani Kidul', 'kecamatan_id' => 85), 
            array('nama_kelurahan' => 'Antapani Tengah', 'kecamatan_id' => 85), 
            array('nama_kelurahan' => 'Antapani wetan', 'kecamatan_id' => 85), 
            array('nama_kelurahan' => 'Kebonwaru', 'kecamatan_id' => 95), 
            array('nama_kelurahan' => 'Cibangkong', 'kecamatan_id' => 95), 
            array('nama_kelurahan' => 'Kacapiring', 'kecamatan_id' => 95), 
            array('nama_kelurahan' => 'Kebongedang', 'kecamatan_id' => 95), 
            array('nama_kelurahan' => 'Maleer', 'kecamatan_id' => 95), 
            array('nama_kelurahan' => 'Babakan Ciamis', 'kecamatan_id' => 105), 
            array('nama_kelurahan' => 'Braga', 'kecamatan_id' => 105), 
            array('nama_kelurahan' => 'Kebon Pisang', 'kecamatan_id' => 105), 
            array('nama_kelurahan' => 'Merdeka', 'kecamatan_id' => 105), 
            array('nama_kelurahan' => 'Burangrang', 'kecamatan_id' => 115), 
            array('nama_kelurahan' => 'Cijagra', 'kecamatan_id' => 115), 
            array('nama_kelurahan' => 'Turangga', 'kecamatan_id' => 115), 
            array('nama_kelurahan' => 'Taman Sari', 'kecamatan_id' => 125), 
            array('nama_kelurahan' => 'Cihapit', 'kecamatan_id' => 125), 
            array('nama_kelurahan' => 'Batununggal', 'kecamatan_id' => 135), 
            array('nama_kelurahan' => 'Kujang Sari', 'kecamatan_id' => 135), 
            array('nama_kelurahan' => 'Wates', 'kecamatan_id' => 135), 
            array('nama_kelurahan' => 'Maleber', 'kecamatan_id' => 145), 
            array('nama_kelurahan' => 'Dungus Cariang', 'kecamatan_id' => 145), 
            array('nama_kelurahan' => 'Campaka', 'kecamatan_id' => 145), 
            array('nama_kelurahan' => 'Margasari', 'kecamatan_id' => 155), 
            array('nama_kelurahan' => 'Cijawura', 'kecamatan_id' => 155), 
            array('nama_kelurahan' => 'Sekejati', 'kecamatan_id' => 155), 
            array('nama_kelurahan' => 'Kebon Kangkung', 'kecamatan_id' => 165), 
            array('nama_kelurahan' => 'Sukapura', 'kecamatan_id' => 165), 
            array('nama_kelurahan' => 'Ciseureuh', 'kecamatan_id' => 175), 
            array('nama_kelurahan' => 'Cigereleng', 'kecamatan_id' => 175), 
            array('nama_kelurahan' => 'Sukasih', 'kecamatan_id' => 185), 
            array('nama_kelurahan' => 'Cimincrang', 'kecamatan_id' => 195), 
            array('nama_kelurahan' => 'Cisaranten Kidul', 'kecamatan_id' => 195), 
            array('nama_kelurahan' => 'Rancabolang', 'kecamatan_id' => 195), 
            array('nama_kelurahan' => 'Rancanumpang', 'kecamatan_id' => 195), 
            array('nama_kelurahan' => 'Sukamiskin', 'kecamatan_id' => 205), 
            array('nama_kelurahan' => 'Cisaranten Bina Harapan', 'kecamatan_id' => 205), 
            array('nama_kelurahan' => 'Cisaranten Endah', 'kecamatan_id' => 205), 
            array('nama_kelurahan' => 'Cisaranten Kulon', 'kecamatan_id' => 205), 
            array('nama_kelurahan' => 'Babakan', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Babakan Ciparay', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Cirangrang', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Margahayu Utara', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Margasuka', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Sukahaji', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Cikutra', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Cicadas', 'kecamatan_id' => 215), 
            array('nama_kelurahan' => 'Pasir Impun', 'kecamatan_id' => 225), 
            array('nama_kelurahan' => 'Jatihandap', 'kecamatan_id' => 225), 
            array('nama_kelurahan' => 'Karangpamulang', 'kecamatan_id' => 225), 
            array('nama_kelurahan' => 'Sindang Jaya', 'kecamatan_id' => 225), 
            array('nama_kelurahan' => 'Cigadung', 'kecamatan_id' => 235), 
            array('nama_kelurahan' => 'Cihaurgeulis', 'kecamatan_id' => 235), 
            array('nama_kelurahan' => 'Neglasari', 'kecamatan_id' => 235), 
            array('nama_kelurahan' => 'Sukaluyu', 'kecamatan_id' => 235), 
            array('nama_kelurahan' => 'Hegarmanah', 'kecamatan_id' => 245), 
            array('nama_kelurahan' => 'Ciumbuleuit', 'kecamatan_id' => 245), 
            array('nama_kelurahan' => 'Ledeng', 'kecamatan_id' => 245), 
            array('nama_kelurahan' => 'Palasari', 'kecamatan_id' => 255), 
            array('nama_kelurahan' => 'Cipadung', 'kecamatan_id' => 255), 
            array('nama_kelurahan' => 'Cisurupan', 'kecamatan_id' => 255), 
            array('nama_kelurahan' => 'Pasirbiru', 'kecamatan_id' => 255), 
            array('nama_kelurahan' => 'Cibaduyut Kidul', 'kecamatan_id' => 265), 
            array('nama_kelurahan' => 'Mekarwangi', 'kecamatan_id' => 265), 
            array('nama_kelurahan' => 'Cipadung Wetan', 'kecamatan_id' => 275), 
            array('nama_kelurahan' => 'Mekar Mulya', 'kecamatan_id' => 275), 
            array('nama_kelurahan' => 'Cipadung Kidul', 'kecamatan_id' => 275), 
            array('nama_kelurahan' => 'Cipadung Kulon', 'kecamatan_id' => 275), 
            array('nama_kelurahan' => 'Sadang Serang', 'kecamatan_id' => 285), 
            array('nama_kelurahan' => 'Dago', 'kecamatan_id' => 285), 
            array('nama_kelurahan' => 'Lebaksiliwangi', 'kecamatan_id' => 285)
        );

        for($i = 0; $i < count($data); $i++){
            $kelurahan = new Kelurahan();
            $kelurahan->nama_kelurahan = $data[$i]['nama_kelurahan'];
            $kelurahan->kecamatan_id = ($data[$i]['kecamatan_id']+1);
            $kelurahan->save();
        }
    }
}
