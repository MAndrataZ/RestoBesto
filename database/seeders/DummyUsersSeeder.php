<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'nama' => 'Mas Admin',
                'username' => 'siadmin',
                'role' => 'admin',
                'password' => bcrypt('123456')
            ],
            [
                'nama' => 'Mas Pelayan',
                'username' => 'sipelayan',
                'role' => 'pelayan',
                'password' => bcrypt('123456')
            ],
            [
                'nama' => 'Mas Kasir',
                'username' => 'sikasir',
                'role' => 'kasir',
                'password' => bcrypt('123456')
            ],
            [
                'nama' => 'Mas Koki',
                'username' => 'sikoki',
                'role' => 'koki',
                'password' => bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
