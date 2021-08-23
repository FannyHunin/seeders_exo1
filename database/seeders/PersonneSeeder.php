<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            [
                "name"=>"Nathan",
                "age"=>27,
                "email"=>"nath@gmail.com",
                "phone"=>"5698718234"
            ],
            [
                "name"=>"Fanny",
                "age"=>24,
                "email"=>"fanny@gmail.com",
                "phone"=>"4895689288"
            ],
            [
                "name"=>"Yassine",
                "age"=>28,
                "email"=>"yassine@gmail.com",
                "phone"=>"4782562289"
            ],
            [
                "name"=>"Ali",
                "age"=>26,
                "email"=>"ali@gmail.com",
                "phone"=>"48522985895"
            ],
        ]);
    }
}
