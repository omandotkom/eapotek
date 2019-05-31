<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NoteSupplierTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('note_supplier')->insert([
                'branch_id' => 1, // 8567
                'supplier_id' => $faker->randomElement($array = array(6, 7, 9, 10)), // 'b'
                'deskripsi' => $faker->text($maxNbChars = 300), // 8567,
                'totalbiaya' => $faker->numberBetween($min = 5500000, $max = 12000000),
                'tanggalsupply' => $faker->date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
            ]);
        }
    }

}
