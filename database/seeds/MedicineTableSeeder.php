<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MedicineTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('medicines')->insert([
                'id' => $faker->unique()->bothify('Mdc ###???'),
                'branch_id' => $faker->numberBetween($min = 1, $max = 4), // 8567
                'namaobat' => $faker->unique()->word,
                'satuan' => $faker->randomElement($array = array ('Tablet','Kapsul','Kaplet',
                    'Puyer','Larutan','Suspensi','Eliksir','Injeksi','Infus','Salep','Lainnya')), // 'b'
                'harga'=> $faker->numberBetween($min = 8000, $max = 24000), // 8567,
                'stok'=> $faker->numberBetween($min = 100, $max = 400),
            ]);
        }
    }

}
