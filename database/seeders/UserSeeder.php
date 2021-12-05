<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            array("name" => "Admin", "email" => "muvazana@gmail.com", "password" => "admin001", "role" => "Admin"), 
            array("name" => "User1", "email" => "tomorrowtoday39@gmail.com", "password" => "user001", "role" => "Member"), 
            // array("name" => "User2", "email" => "User2@gmail.com", "password" => "user00002", "role" => "Member"), 
            // array("name" => "User3", "email" => "User3@gmail.com", "password" => "user00003", "role" => "Member"), 
            // array("name" => "User4", "email" => "User4@gmail.com", "password" => "user00004", "role" => "Member"),
            array("name" => "Guest", "email" => "Guest1@gmail.com", "password" => "guest00001", "role" => "Guest")
        );

        foreach($datas as $data){
            $User = new User();
            $User->name = $data['name'];
            $User->email = $data['email'];
            $User->password = Hash::make($data['password']);
            $User->role = $data['role'];
            $User->save();
        }
    }
}
