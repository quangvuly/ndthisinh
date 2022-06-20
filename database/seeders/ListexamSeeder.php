<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListexamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=2; $i < 50 ; $i++) { 
            DB::table('list_exam')->upsert([
                'user_id' => random_int(2,20),
                'subject_id' => random_int(1,10),
            ],['user_id','subject_id']);
        }
    }
}
