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
            'noktp' => '19276578129239129',
            'nik' => '16102126',
            'position_id' => 9,
        ]);

        DB::table('workers')->insert([
            'branch_id' => '1',
            'nama' => 'Ridwan Risandi',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '12421266121231212',
            'nik' => '16102137',
            'position_id' => 1,
        ]);
        DB::table('workers')->insert([
            'branch_id' => '1',
            'nama' => 'Hesa Abda Arrasyid',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '124212121231212',
            'nik' => '16102124',
            'position_id' => 10,
        ]);
        DB::table('workers')->insert([
            'branch_id' => '2',
            'nama' => 'Muhammad Ilham',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '19276578129239129',
            'nik' => '16102131',
            'position_id' => 1,
        ]);
        DB::table('workers')->insert([
            'branch_id' => '3',
            'nama' => 'Adinda Miftahul',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '19276578129239129',
            'nik' => '16102110',
            'position_id' => 1,
        ]);

        DB::table('workers')->insert([
            'branch_id' => '3',
            'nama' => 'Daniel Pedrosa',
            'alamat' => 'Perumahan Telaga Harapan Blok D9 No.4',
            'noktp' => '19276578129239129',
            'nik' => '16102199',
            'position_id' => 1,
        ]);

        //lela branchworker cabang 2
        DB::table('users')->insert([
            'name' => 'Lela Sari Kristina',
            'nik' => '16102127',
            'role' => 'branchworker',
            'password' => Hash::make('system3298'),
        ]);
        DB::table('users')->insert([
            'name' => 'Muhammad Ilham',
            'nik' => '16102131',
            'role' => 'branchhead',
            'password' => Hash::make('system3298'),
        ]);
        DB::table('users')->insert([
            'name' => 'Adinda Miftahul',
            'nik' => '16102110',
            'role' => 'branchworker',
            'password' => Hash::make('system3298'),
        ]);
        DB::table('users')->insert([
            'name' => 'Daniel Pedrosa',
            'nik' => '16102199',
            'role' => 'branchhead',
            'password' => Hash::make('system3298'),
        ]);


       
    }
}
