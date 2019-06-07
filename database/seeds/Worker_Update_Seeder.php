<?php

use Illuminate\Database\Seeder;

class Worker_Update_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('workers')->insert([
            'nik' => '16102126',
            'nama' => 'Khalid Abdurrahman',
            'branch_id' =>1, 
            'alamat' => 'Perum Telaga Harapan Blok D9 No.4',
            'noktp' => '1610212691912912',
            'position_id' =>1
        ]);
        
        DB::table('workers')->insert([
            'nama' => 'Ridwan Risandi',
            'nik' => '16102137',
            'branch_id' => '0',
            'alamat'=>'Perum Indah owner blablabla',
            'noktp' =>'16102137971297312',
            'position_id' =>2
            ]);
        
        DB::table('workers')->insert([
            'nama' => 'Hesa Abda',
            'nik' => '16102124',
            'branch_id' => 1,
            'alamat' => 'Wonosobo asri',
            'noktp' => '1610212498174612',
            'position_id' =>3
        ]);
    }
}
