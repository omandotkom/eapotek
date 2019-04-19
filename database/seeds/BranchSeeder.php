<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('branches')->insert([
            'nik' => '16102126',
            'nama' => 'K-24 JEND. SUDIRMAN',
            'alamat' => 'JL. JEND. SOEDIRMAN NO. 259 PURWOKERTO',
        ]);
    }
}
