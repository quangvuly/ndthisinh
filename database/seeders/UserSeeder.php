<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@pttrieu.com',
            'password' => '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6',
            'idcard' => '123456789',
            'birthday' => '1990-01-01',
            'idcard_img' => 'url_img',
        ]);

        for ($i=1; $i < 20 ; $i++) { 
            DB::table('users')->insert([
                'firstname' => 'User',
                'lastname' => $i,
                'email' => 'User'.$i.'@example.com',
                'password' => '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6',
                'idcard' => '123456789'.$i,
                'birthday' => '1990-01-'.$i,
                'idcard_img' => 'url_img',
            ]);
        }
    }
}
