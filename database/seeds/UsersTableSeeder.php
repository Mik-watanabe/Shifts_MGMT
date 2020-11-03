<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataSet = [
            [
                'name' => "佐藤MG",
                'email' => "Sato@mail.com",
                'is_manager' => 1,
                'password' => Hash::make(12345678),
            ],
            [
                'name' => "加藤太郎",
                'email' => "Kato@mail.com",
                'is_manager' => 0,
                'password' => Hash::make(23456789),
            ],
            [
                'name' => "渡邉太郎",
                'email' => "Watanabe@mail.com",
                'is_manager' => 0,
                'password' => Hash::make(34567890),
            ],
            [
                'name' => "佐々木太郎",
                'email' => "Sasaki@mail.com",
                'is_manager' => 0,
                'password' => Hash::make(45678123),
            ],
           
        ];

        foreach ($dataSet as $data) {
            User::create($data);
        }
    
    }
}
