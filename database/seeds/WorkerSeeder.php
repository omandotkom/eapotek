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


        DB::table('workers')->insert([
            'branch_id' => '1',
            'nama' => 'Khalid Abdurrahman',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '124212121231212',
            'nik' => '16102126',
            'position_id' => 9,
        ]);

        DB::table('workers')->insert([
            'branch_id' => '1',
            'nama' => 'Khalid Abdurrahman',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '124212121231212',
            'nik' => '16102124',
            'position_id' => 1,
        ]);
        DB::table('workers')->insert([
            'branch_id' => '1',
            'nama' => 'Khalid Abdurrahman',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '124212121231212',
            'nik' => '16102137',
            'position_id' => 10,
        ]);
        
    }
}
