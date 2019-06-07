<?php

use Illuminate\Database\Seeder;

class User_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('users')->insert([
            'name' => 'Khalid Abdurrahman',
            'nik' => '16102126',
            'role' => 'branchhead',
            'password' => Hash::make('system3298'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Ridwan Risandi',
            'nik' => '16102137',
            'role' => 'owner',
            'password' => Hash::make('system3298'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Hesa Abda',
            'nik' => '16102124',
            'role' => 'branchworker',
            'password' => Hash::make('system3298'),
        ]);
    
    }
}
