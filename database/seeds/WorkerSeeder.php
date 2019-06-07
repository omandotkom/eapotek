<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 80; $i++) {

            DB::table('workers')->insert([
                'branch_id' => $faker->numberBetween($min = 1, $max = 4),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'nik' => $faker->numerify('##########'), // 'Hello 609', // 79907610
                'noktp' => $faker->creditCardNumber,
                'position_id' => $faker->numberBetween($min = 1, $max = 30),
                
            ]);
        }
    }
}
