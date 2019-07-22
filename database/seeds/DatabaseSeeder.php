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
            BranchSeeder::class,
            User_Table_Seeder::class,
            NoteSupplierTableSeeder::class,
            PositionSeeder::class,
            WorkerSeeder::class,
        ]);
    
        /*$this->call([
            BranchSeeder::class,
            User_Table_Seeder::class,
            MedicineTableSeeder::class,
            NoteSupplierTableSeeder::class,
            PositionSeeder::class,
            SupplierTableSeeder::class,
            WorkerSeeder::class,
            PositionSeeder::class,

        ]);
    */
    }
}
