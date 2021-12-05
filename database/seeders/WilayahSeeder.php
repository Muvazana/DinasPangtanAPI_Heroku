<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array( 'nama_kecamatan' => 'Ujungberung',  'nama_kelurahan' => 'Pasir Jati'), 
            array( 'nama_kecamatan' => 'Ujungberung',  'nama_kelurahan' => 'Cigending'), 
            array( 'nama_kecamatan' => 'Ujungberung',  'nama_kelurahan' => 'Pasir Endah'), 
            array( 'nama_kecamatan' => 'Ujungberung',  'nama_kelurahan' => 'Pasanggrahan'), 
            array( 'nama_kecamatan' => 'Ujungberung',  'nama_kelurahan' => 'Pasir Wangi'), 
            array( 'nama_kecamatan' => 'Rancasari',  'nama_kelurahan' => 'Mekarjaya'), 
            array( 'nama_kecamatan' => 'Rancasari',  'nama_kelurahan' => 'Cipamokolan'), 
            array( 'nama_kecamatan' => 'Rancasari',  'nama_kelurahan' => 'Derwati'), 
            array( 'nama_kecamatan' => 'Rancasari',  'nama_kelurahan' => 'Manjahlega'), 
            array( 'nama_kecamatan' => 'Cinambo',  'nama_kelurahan' => 'Pakemitan'), 
            array( 'nama_kecamatan' => 'Cinambo',  'nama_kelurahan' => 'Cisaranten Wetan'), 
            array( 'nama_kecamatan' => 'Cinambo',  'nama_kelurahan' => 'Sukamulya'), 
            array( 'nama_kecamatan' => 'Cinambo',  'nama_kelurahan' => 'Babakan Penghulu'), 
            array( 'nama_kecamatan' => 'Sukasari',  'nama_kelurahan' => 'Gegerkalong'), 
            array( 'nama_kecamatan' => 'Sukasari',  'nama_kelurahan' => 'Isola'), 
            array( 'nama_kecamatan' => 'Sukasari',  'nama_kelurahan' => 'Sarijadi'), 
            array( 'nama_kecamatan' => 'Sukajadi',  'nama_kelurahan' => 'Cipedes'), 
            array( 'nama_kecamatan' => 'Sukajadi',  'nama_kelurahan' => 'Pasteur'), 
            array( 'nama_kecamatan' => 'Sukajadi',  'nama_kelurahan' => 'Sukawarna'), 
            array( 'nama_kecamatan' => 'Sukajadi',  'nama_kelurahan' => 'Sukabungah'), 
            array( 'nama_kecamatan' => 'Sukajadi',  'nama_kelurahan' => 'Sukagalih'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Pelindung Hewan'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Cibadak'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Panjunan'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Nyengseret'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Karanganyar'), 
            array( 'nama_kecamatan' => 'Astana anyar',  'nama_kelurahan' => 'Karasak'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Husen Sastranegara'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Arjuna'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Pamoyanan'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Pasirkaliki'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Pajajaran'), 
            array( 'nama_kecamatan' => 'Cicendo',  'nama_kelurahan' => 'Sukaraja'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Cijerah'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Caringin'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Cibuntu'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Cigondewah Kaler'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Cigondewah Kidul'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Cigondewah Rahayu'), 
            array( 'nama_kecamatan' => 'Bandung Kulon',  'nama_kelurahan' => 'Gempolsari'), 
            array( 'nama_kecamatan' => 'Antapani',  'nama_kelurahan' => 'Antapani Kidul'), 
            array( 'nama_kecamatan' => 'Antapani',  'nama_kelurahan' => 'Antapani Tengah'), 
            array( 'nama_kecamatan' => 'Antapani',  'nama_kelurahan' => 'Antapani wetan'), 
            array( 'nama_kecamatan' => 'Batununggal',  'nama_kelurahan' => 'Kebonwaru'), 
            array( 'nama_kecamatan' => 'Batununggal',  'nama_kelurahan' => 'Cibangkong'), 
            array( 'nama_kecamatan' => 'Batununggal',  'nama_kelurahan' => 'Kacapiring'), 
            array( 'nama_kecamatan' => 'Batununggal',  'nama_kelurahan' => 'Kebongedang'), 
            array( 'nama_kecamatan' => 'Batununggal',  'nama_kelurahan' => 'Maleer'), 
            array( 'nama_kecamatan' => 'Sumur Bandung',  'nama_kelurahan' => 'Babakan Ciamis'), 
            array( 'nama_kecamatan' => 'Sumur Bandung',  'nama_kelurahan' => 'Braga'), 
            array( 'nama_kecamatan' => 'Sumur Bandung',  'nama_kelurahan' => 'Kebon Pisang'), 
            array( 'nama_kecamatan' => 'Sumur Bandung',  'nama_kelurahan' => 'Merdeka'), 
            array( 'nama_kecamatan' => 'Lengkong',  'nama_kelurahan' => 'Burangrang'), 
            array( 'nama_kecamatan' => 'Lengkong',  'nama_kelurahan' => 'Cijagra'), 
            array( 'nama_kecamatan' => 'Lengkong',  'nama_kelurahan' => 'Turangga'), 
            array( 'nama_kecamatan' => 'Bandung Wetan',  'nama_kelurahan' => 'Taman Sari'), 
            array( 'nama_kecamatan' => 'Bandung Wetan',  'nama_kelurahan' => 'Cihapit'), 
            array( 'nama_kecamatan' => 'Bandung Kidul',  'nama_kelurahan' => 'Batununggal'), 
            array( 'nama_kecamatan' => 'Bandung Kidul',  'nama_kelurahan' => 'Kujang Sari'), 
            array( 'nama_kecamatan' => 'Bandung Kidul',  'nama_kelurahan' => 'Wates'), 
            array( 'nama_kecamatan' => 'Andir',  'nama_kelurahan' => 'Maleber'), 
            array( 'nama_kecamatan' => 'Andir',  'nama_kelurahan' => 'Dungus Cariang'), 
            array( 'nama_kecamatan' => 'Andir',  'nama_kelurahan' => 'Campaka'), 
            array( 'nama_kecamatan' => 'Buah Batu',  'nama_kelurahan' => 'Margasari'), 
            array( 'nama_kecamatan' => 'Buah Batu',  'nama_kelurahan' => 'Cijawura'), 
            array( 'nama_kecamatan' => 'Buah Batu',  'nama_kelurahan' => 'Sekejati'), 
            array( 'nama_kecamatan' => 'Kiaracondong',  'nama_kelurahan' => 'Kebon Kangkung'), 
            array( 'nama_kecamatan' => 'Kiaracondong',  'nama_kelurahan' => 'Sukapura'), 
            array( 'nama_kecamatan' => 'Regol',  'nama_kelurahan' => 'Ciseureuh'), 
            array( 'nama_kecamatan' => 'Regol',  'nama_kelurahan' => 'Cigereleng'), 
            array( 'nama_kecamatan' => 'Bojongloa Kaler',  'nama_kelurahan' => 'Sukasih'), 
            array( 'nama_kecamatan' => 'Gedebage',  'nama_kelurahan' => 'Cimincrang'), 
            array( 'nama_kecamatan' => 'Gedebage',  'nama_kelurahan' => 'Cisaranten Kidul'), 
            array( 'nama_kecamatan' => 'Gedebage',  'nama_kelurahan' => 'Rancabolang'), 
            array( 'nama_kecamatan' => 'Gedebage',  'nama_kelurahan' => 'Rancanumpang'), 
            array( 'nama_kecamatan' => 'Arcamanik',  'nama_kelurahan' => 'Sukamiskin'), 
            array( 'nama_kecamatan' => 'Arcamanik',  'nama_kelurahan' => 'Cisaranten Bina Harapan'), 
            array( 'nama_kecamatan' => 'Arcamanik',  'nama_kelurahan' => 'Cisaranten Endah'), 
            array( 'nama_kecamatan' => 'Arcamanik',  'nama_kelurahan' => 'Cisaranten Kulon'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Babakan'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Babakan Ciparay'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Cirangrang'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Margahayu Utara'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Margasuka'), 
            array( 'nama_kecamatan' => 'Babakan Ciparay',  'nama_kelurahan' => 'Sukahaji'), 
            array( 'nama_kecamatan' => 'Cibeunying Kidul',  'nama_kelurahan' => 'Cikutra'), 
            array( 'nama_kecamatan' => 'Cibeunying Kidul',  'nama_kelurahan' => 'Cicadas'), 
            array( 'nama_kecamatan' => 'Mandalajati',  'nama_kelurahan' => 'Pasir Impun'), 
            array( 'nama_kecamatan' => 'Mandalajati',  'nama_kelurahan' => 'Jatihandap'), 
            array( 'nama_kecamatan' => 'Mandalajati',  'nama_kelurahan' => 'Karangpamulang'), 
            array( 'nama_kecamatan' => 'Mandalajati',  'nama_kelurahan' => 'Sindang Jaya'), 
            array( 'nama_kecamatan' => 'Cibeunying Kaler',  'nama_kelurahan' => 'Cigadung'), 
            array( 'nama_kecamatan' => 'Cibeunying Kaler',  'nama_kelurahan' => 'Cihaurgeulis'), 
            array( 'nama_kecamatan' => 'Cibeunying Kaler',  'nama_kelurahan' => 'Neglasari'), 
            array( 'nama_kecamatan' => 'Cibeunying Kaler',  'nama_kelurahan' => 'Sukaluyu'), 
            array( 'nama_kecamatan' => 'Cidadap',  'nama_kelurahan' => 'Hegarmanah'), 
            array( 'nama_kecamatan' => 'Cidadap',  'nama_kelurahan' => 'Hegarmanah'), 
            array( 'nama_kecamatan' => 'Cidadap',  'nama_kelurahan' => 'Ciumbuleuit'), 
            array( 'nama_kecamatan' => 'Cidadap',  'nama_kelurahan' => 'Ledeng'), 
            array( 'nama_kecamatan' => 'Cibiru',  'nama_kelurahan' => 'Palasari'), 
            array( 'nama_kecamatan' => 'Cibiru',  'nama_kelurahan' => 'Cipadung'), 
            array( 'nama_kecamatan' => 'Cibiru',  'nama_kelurahan' => 'Cisurupan'), 
            array( 'nama_kecamatan' => 'Cibiru',  'nama_kelurahan' => 'Pasirbiru'), 
            array( 'nama_kecamatan' => 'Bojongloa Kidul',  'nama_kelurahan' => 'Cibaduyut Kidul'), 
            array( 'nama_kecamatan' => 'Bojongloa Kidul',  'nama_kelurahan' => 'Mekarwangi'), 
            array( 'nama_kecamatan' => 'Panyileukan',  'nama_kelurahan' => 'Cipadung Wetan'), 
            array( 'nama_kecamatan' => 'Panyileukan',  'nama_kelurahan' => 'Mekar Mulya'), 
            array( 'nama_kecamatan' => 'Panyileukan',  'nama_kelurahan' => 'Cipadung Kidul'), 
            array( 'nama_kecamatan' => 'Panyileukan',  'nama_kelurahan' => 'Cipadung Kulon'), 
            array( 'nama_kecamatan' => 'Coblong',  'nama_kelurahan' => 'Sadang Serang'), 
            array( 'nama_kecamatan' => 'Coblong',  'nama_kelurahan' => 'Dago'), 
            array( 'nama_kecamatan' => 'Coblong',  'nama_kelurahan' => 'Lebaksiliwangi')
        );
 
    	for($i = 0; $i < count($data); $i++){
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('tb_wilayah')->insert([
    			'nama_kelurahan' => $data[$i]['nama_kelurahan'],
    			'nama_kecamatan' => $data[$i]['nama_kecamatan'],
    			'created_at' => DB::raw('CURRENT_TIMESTAMP'),
    			'updated_at' => DB::raw('CURRENT_TIMESTAMP')
    		]);
    	}
    }
}
