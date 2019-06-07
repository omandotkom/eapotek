<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PositionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        for ($i = 1; $i <= 30; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('positions')->insert([
                
                'branch_id' => $faker->numberBetween($min = 1, $max = 4), // 8567
                'nama' => $faker->jobTitle,
                'salary' => $faker->numberBetween($min = 2300000, $max = 3100000), // 8567,
                ]);
        }
        
    }

}
