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
                'password' => 12345678,
            ],
            [
                'name' => "加藤さん",
                'email' => "Kato@mail.com",
                'is_manager' => 0,
                'password' => 23456789,
            ],
            [
                'name' => "渡邉さん",
                'email' => "Watanabe@mail.com",
                'is_manager' => 0,
                'password' => 34567890,
            ],
            [
                'name' => "佐々木さん",
                'email' => "Sasaki@mail.com",
                'is_manager' => 0,
                'password' => 45678123,
            ],
           
        ];

        foreach ($dataSet as $data) {
            User::create($data);
        }
    
    }
}
