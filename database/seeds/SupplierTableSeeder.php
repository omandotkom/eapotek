<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SupplierTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        for ($i = 1; $i <= 80; $i++) {

            DB::table('suppliers')->insert([
                'branch_id' => $faker->numberBetween($min = 1, $max = 4),
                'nama' => 'CV. ' . $faker->unique()->word,
                'alamat' => $faker->address,
                'telepon' => $faker->phoneNumber,
                'email' => $faker->companyEmail,
            ]);
        }
    }

}
