<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
         $this->call([
             User_Table_Seeder::class,
             BranchSeeder::class,
             MedicineTableSeeder::class,
             SupplierTableSeeder::class,
             WorkerSeeder::class,
             PositionSeeder::class
    ]);
    }
}
