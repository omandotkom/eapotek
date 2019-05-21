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
            'alamat' => 'JL. JEND. SOEDIRMAN NO.259 RT.2/1 PURWOKERTO TENGGARA, PURWOKERTO, JAWA TENGAH, 56311',
        ]);

	      DB::table('branches')->insert([
            'nik' => '16102124',
            'nama' => 'K-24 BAROKAH JAYA',
            'alamat' => 'JL. KAUMAN NO.100 RT.3/3 PAKEM SLEMAN, DAERAH ISTIMEWA YOGYAKARTA, 29890',
        ]);


      DB::table('branches')->insert([
            'nik' => '16102137',
            'nama' => 'K-24 RIDHO ILAHI',
            'alamat' => 'JL. SWATANTRA V NO.20 RT.4/2 DUREN SAWIT, BEKASI, JAWA BARAT, 64399',
        ]);


      DB::table('branches')->insert([
            'nik' => '16102137',
            'nama' => 'K-24 MAKMUR SENTOSA',
            'alamat' => 'JL. AKASIA NO.311 RT.9/1 JATIASIH, BEKASI, JAWA BARAT, 64217',
        ]);

         
         
    }
}
